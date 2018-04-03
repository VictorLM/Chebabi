<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvogadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advogados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario')->unsigned()->unique();
            $table->foreign('usuario')->references('id')->on('users');
            $table->mediumText('texto');
            $table->string('oab', 15);
            $table->enum('tipo_adv', ['Trabalhista', 'Cível'])->nullable();
            $table->string('foto', 100)->nullable();
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
        Schema::dropIfExists('advogados');
    }
}
