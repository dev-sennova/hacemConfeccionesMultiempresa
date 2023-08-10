<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbLiquidezTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_liquidez', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('activocorriente')->unsigned();
            $table->bigInteger('pasivocorriente')->unsigned();
            $table->float('razoncorriente');
            $table->bigInteger('capitaldetrabajo')->unsigned();
            $table->bigInteger('inventario')->unsigned();
            $table->double('pruebaacida', 12, 2);
            $table->string('detalle', 255);
            $table->foreignId('idEmpresa')->constrained('tb_configuracion_basica');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_liquidez');
    }
}
