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
        Schema::create('organisasis', function (Blueprint $table) {
            $table->id();
            $table->string('judul_kegiatan');
            $table->text('proposal_kegiatan');
            $table->enum('status_kegiatan',['Pending','Diterima','Ditolak'])->default('Pending');
            $table->text('keterangan_kegiatan')->nullable();
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
        Schema::dropIfExists('organisasis');
    }
};
