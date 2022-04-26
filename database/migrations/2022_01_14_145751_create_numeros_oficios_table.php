<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNumerosOficiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('numeros_oficios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tipo_documento');
            $table->unsignedBigInteger('id_destino');
            $table->string('destino_libre')->nullable();
            $table->integer('num_documento')->nullable();
            $table->integer('anio');
            $table->string('num_oficio_anio');
            $table->unsignedBigInteger('cod_fiscalia_origen');
            $table->string('gls_observacion')->nullable();
            $table->string('username');
            $table->char('requiere_respuesta',1);
            $table->timestamps();

            $table->foreign('username')->references('username')->on('users');
            $table->foreign('id_tipo_documento')->references('id')->on('tipo_documentos');
            $table->foreign('id_destino')->references('id')->on('destinos');
            $table->foreign('cod_fiscalia_origen')->references('cod_fiscalia')->on('fiscalias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('numeros_oficios');
    }
}
