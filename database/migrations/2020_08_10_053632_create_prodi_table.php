<?php
<<<<<<< HEAD

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

=======
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
>>>>>>> e400f70d43e1a8c5fa9763ff464982994dbbf668
class CreateProdiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodi', function (Blueprint $table) {
<<<<<<< HEAD
            $table->integer('kode_prodi')->primary();
=======
            $table->integer('kode_prodi',)->primary();
>>>>>>> e400f70d43e1a8c5fa9763ff464982994dbbf668
            $table->string('nama_prodi', 150);
            $table->string('kaprodi', 100);
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
        Schema::dropIfExists('prodi');
    }
}
