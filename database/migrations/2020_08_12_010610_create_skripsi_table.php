<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createSkripsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skripsi', function (Blueprint $table) {
            $table->string('id',12)->primary();
            $table->string('nim', 100);
            $table->string('nama_mahasiswa', 100);
            $table->string('judul', 150);
            $table->string('tempat_penelitian', 100);
            $table->text('alamat');
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
        Schema::dropIfExists('skripsi');
    }
}
