<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FiscaliaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //DB::table('Fiscalias')->truncate();

        \App\Models\Fiscalia::create([
      'cod_fiscalia' => 5,
      'gls_fiscalia' => 'Regional',
      ]);


      \App\Models\Fiscalia::create([
      'cod_fiscalia' => 501,
      'gls_fiscalia' => 'Valparaiso',
      ]);

      \App\Models\Fiscalia::create([
      'cod_fiscalia' => 502,
      'gls_fiscalia' => 'Viña del Mar',
      ]);

      \App\Models\Fiscalia::create([
      'cod_fiscalia' => 503,
      'gls_fiscalia' => 'San Antonio',
      ]);

      \App\Models\Fiscalia::create([
      'cod_fiscalia' => 504,
      'gls_fiscalia' => 'San Felipe',
      ]);

      \App\Models\Fiscalia::create([
      'cod_fiscalia' => 505,
      'gls_fiscalia' => 'Quilpue',
      ]);

      \App\Models\Fiscalia::create([
      'cod_fiscalia' => 506,
      'gls_fiscalia' => 'Los Andes',
      ]);

      \App\Models\Fiscalia::create([
      'cod_fiscalia' => 507,
      'gls_fiscalia' => 'Villa Alemana',
      ]);

      \App\Models\Fiscalia::create([
      'cod_fiscalia' => 508,
      'gls_fiscalia' => 'Quillota',
      ]);

      \App\Models\Fiscalia::create([
      'cod_fiscalia' => 509,
      'gls_fiscalia' => 'La Calera',
      ]);

      \App\Models\Fiscalia::create([
      'cod_fiscalia' => 510,
      'gls_fiscalia' => 'La Ligua',
      ]);

      \App\Models\Fiscalia::create([
      'cod_fiscalia' => 511,
      'gls_fiscalia' => 'Limache',
      ]);

      \App\Models\Fiscalia::create([
      'cod_fiscalia' => 512,
      'gls_fiscalia' => 'Quintero',
      ]);

      \App\Models\Fiscalia::create([
      'cod_fiscalia' => 513,
      'gls_fiscalia' => 'Isla de Pascua',
      ]);

      \App\Models\Fiscalia::create([
      'cod_fiscalia' => 515,
      'gls_fiscalia' => 'Casablanca',
      ]);

      \App\Models\Fiscalia::create([
      'cod_fiscalia' => 516,
      'gls_fiscalia' => 'SACFI',
      ]);

    }
}
