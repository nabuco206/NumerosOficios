<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
error_reporting(0);

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {     
        logger($request->username);

            $dominio = "minpublico.cl";
            $host	 = "172.18.1.7";
            $puerto	 = "389";
            $usr = $request->username;
            $passwd	 = $request->password_dom;
            $usuario  = $usr."@".$dominio; 
            logger($usuario);
            logger($passwd);
            $conex 	  = ldap_connect($host,$puerto) or die ("No ha sido posible conectarse al servidor de dominio"); 

            
            if (ldap_set_option($conex, LDAP_OPT_PROTOCOL_VERSION, 3)){ 
                ldap_set_option($conex, LDAP_OPT_REFERRALS, 0);
            }else{
                echo "<br>Error de conexi&oacute;n en protocolo de Autentificacion.";
            } 

            if ($conex)
            {
                    $r=ldap_bind($conex, $usuario, $passwd); 
                    try {
                            if ($r)
                            {
                                $credentials = $request->only('username', 'password');
                                if (Auth::attempt($credentials)){
                                    //logger('DOMINIO OK - BASE NMRO OF OK');
                                    return redirect()->intended('home');
                                }else{
                                    logger('DOMINIO OK - BASE NMRO OF OFF');
                                    return back()->withErrors([
                                        'email' => 'Nombre de Usuario no registrado en Sistema.',
                                    ]);
                                }
                                
                            }else{
                                logger('DOMINIO FAIL');  
                                return back()->withErrors([
                                    'email' => 'Usuario o Contraseña incorrecta.',
                                ]);
                            }
                    } catch (AuthenticatesUsers $e) {
                        logger('Usuario no registradoCACH');
                        }        
                        
            } else{
                logger('NO Conex');  
            }
            ldap_close($conex);
    
    }

    public function username()
    {
        return 'username';
    }
}
