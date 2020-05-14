<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nome", 150);
            $table->string("login", 20);
            $table->string("senha", 20);
            $table->string("cidade", 20);
            $table->string("cep", 20);
            $table->string("bairro", 20);
            $table->string("rua", 20);
            $table->string("numero", 20);
            $table->string("uf", 20);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
