<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatakriteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datakriteria', function (Blueprint $table) {
            $table->id('id_kriteria');
            $table->integer('rumah_sehat');
            $table->integer('air_bersih');
            $table->integer('penduduk');
            $table->integer('kasus');
            $table->integer('sanitasi');
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
        Schema::dropIfExists('datakriteria');
    }
}
