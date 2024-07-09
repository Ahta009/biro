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
        Schema::create('rencanas', function (Blueprint $table) {
            $table->id();
            $table->string('rencana_judul');
            $table->text('rencana_berkas');
            $table->enum('rencana_status',['Pending','Diterima','Ditolak'])->default('Pending');
            $table->enum('rencana_jenis',['Strategis','Operasional','Tahunan','Evaluasi','Pengembangan'])->default('Strategis');
            $table->text('rencana_keterangan')->nullable();
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
        Schema::dropIfExists('rencanas');
    }
};
