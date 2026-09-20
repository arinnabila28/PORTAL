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
    Schema::create('persebarans', function (Blueprint $table) {
        $table->id();
        $table->string('daerah');
        $table->float('posisi_x'); // Koordinat Kiri-Kanan (Persen)
        $table->float('posisi_y'); // Koordinat Atas-Bawah (Persen)
        $table->text('pekerjaan'); // Disimpan berbaris
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persebarans');
    }
};
