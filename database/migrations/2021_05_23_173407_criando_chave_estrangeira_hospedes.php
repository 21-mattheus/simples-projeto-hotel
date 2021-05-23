<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriandoChaveEstrangeiraHospedes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hospedes', function (Blueprint $table) {
            //

            $table->foreign('cpf')->references('id')->on('datas');
            $table->foreign('cpf')->references('id')->on('quartos');
            $table->foreign('cpf')->references('id')->on('pagamentos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hospedes', function (Blueprint $table) {
            //
        });
    }
}
