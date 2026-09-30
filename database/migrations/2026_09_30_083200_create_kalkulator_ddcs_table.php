<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kalkulator_ddcs', function (Blueprint $table) {
            $table->id();
            $table->string('subjek'); // Menyimpan nama subjek (Contoh: Kamus Kedokteran)
            $table->string('nomor'); // Menyimpan nomor DDC (Contoh: 610.3)
            $table->text('detail'); // Menyimpan detail HTML penjelasan klasifikasinya
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kalkulator_ddcs');
    }
};