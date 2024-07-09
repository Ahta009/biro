<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submisis', function (Blueprint $table) {
            $table->id();
            $table->string('judul_prodi');
            $table->text('berkas_prodi');
            $table->enum('status_prodi',['Pending','Diterima','Ditolak'])->default('Pending');
            $table->text('keterangan_prodi')->nullable();
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
        Schema::dropIfExists('submissi');
    }
};
