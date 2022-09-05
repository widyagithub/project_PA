<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatasurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datasurveys', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nik');
            $table->string('nama');
            $table->string('alamat');
            $table->string('nama_kriteria');
            $table->string('nama_subkriteria');
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
        Schema::dropIfExists('datasurveys');
    }
}
