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
            $table->unsignedInteger('id_kecamatan');
            $table->foreign('id_kecamatan')->references('id_kecamatan')->on('kecamatan')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->integer('tahun');
            $table->float('rumah_sehat');
            $table->float('air_bersih');
            $table->float('penduduk');
            $table->float('kasus');
            $table->float('sanitasi');
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
