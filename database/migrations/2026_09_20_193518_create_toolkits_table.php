<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('toolkits', function (Blueprint $table) {
        $table->id();
        $table->string('nama_aplikasi');
        $table->string('mata_kuliah');
        $table->text('deskripsi');
        $table->string('link_download');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toolkits');
    }
};
