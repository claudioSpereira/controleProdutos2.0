<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpressorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impressoras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('departamento_id')->unsigned();
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->integer('suprimento_id')->unsigned();
            $table->foreign('suprimento_id')->references('id')->on('suprimentos');
            $table->string('imp_nome',25);
            $table->string('imp_model',25);
            $table->string('imp_status',25);
            $table->string('imp_cod')->unique();
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
        Schema::dropIfExists('impressoras');
    }
}
