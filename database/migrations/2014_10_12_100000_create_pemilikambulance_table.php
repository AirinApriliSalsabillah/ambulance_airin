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
        Schema::create('pemilik_ambulances', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('id_pemilik')->nullable(); // Relasi ke user
            $table->string('nama')->nullable();
            $table->string('alamat')->nullable();
            $table->string('no_hp')->nullable();
            $table->text('keterangan')->nullable();
            $table->decimal('latitude', 10, 7)->nullable(); // Presisi untuk koordinat
            $table->decimal('longitude', 10, 7)->nullable();
            $table->string('daerah')->nullable();
            $table->timestamps();

            // Tambahkan foreign key jika menggunakan relasi dengan tabel users
            $table->foreign('id_pemilik')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemilik_ambulances');
    }
};
