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
            $table->integer('id_tahun')->unsigned()->after('id_kriteria');
            $table->foreign('id_tahun')->references('id_tahun')->on('tahun')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->integer('id_kecamatan')->unsigned()->after('id_kriteria');
            $table->foreign('id_kecamatan')->references('id_kecamatan')->on('kecamatan')->onUpdate('CASCADE')->onDelete('CASCADE');
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
