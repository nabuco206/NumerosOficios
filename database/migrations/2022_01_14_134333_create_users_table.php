<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('name');
            $table->unsignedBigInteger('cod_fiscalia');
            $table->char('estd_user')->default('A');
            $table->integer('rol_user')->default(1);
            $table->string('password')->default('$2y$10$EuENDAFZfXruLEmD9M6V9uLHaO1XteZT4Apzbp7kV3nJW95id6VSa');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('cod_fiscalia')->references('cod_fiscalia')->on('fiscalias');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
