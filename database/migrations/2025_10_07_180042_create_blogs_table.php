<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration untuk membuat tabel `blogs`.
 * Menyimpan artikel/blog beserta metadata seperti author, kategori, dan list tambahan.
 */
return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id(); // Primary key

            // Slug unik untuk URL friendly
            $table->string('slug')->unique();

            // Judul artikel
            $table->string('title');

            // Relasi ke user sebagai author
            $table->foreignId('auth_id')->constrained('users');

            // Konten utama artikel
            $table->text('content');

            // List tambahan dalam bentuk JSON, bisa null
            $table->json('list')->nullable();

            // Kategori blog: Beginner, Intermediate, Advance
            $table->enum('category', ['Beginner', 'Intermediate', 'Advance']);

            // Warna tema blog (default hijau)
            $table->string('color')->default('green');

            // Timestamp created_at & updated_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
