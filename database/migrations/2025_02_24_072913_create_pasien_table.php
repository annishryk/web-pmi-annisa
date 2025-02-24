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
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('norekammedis')->unique();
            $table->string('nik')->unique();
            $table->string('namalengkap');
            $table->text('alamat');
            $table->enum('jeniskelamin', ['Pria', 'Wanita']);
            $table->date('tanggallahir');
            $table->string('notelepon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien');
    }
};
