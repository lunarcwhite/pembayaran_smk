<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_biayas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('jurusan_id')->unsigned()->nullable();
            $table->bigInteger('tahun_ajaran_id')->unsigned();
            $table->bigInteger('biaya_id')->unsigned();
            $table->float('jumlah_biaya');
            $table->timestamps();

            $table->foreign('jurusan_id')->references('id')->on('jurusans')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('tahun_ajaran_id')->references('id')->on('tahun_ajarans')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('biaya_id')->references('id')->on('biayas')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_biayas');
    }
};
