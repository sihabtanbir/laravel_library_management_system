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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('author_name');
            $table->string('category');
            $table->string('quantity');
            $table->string('total_page');
            $table->string('prize');
            $table->timestamps();
        });

        Schema::create('book_author', function (Blueprint $table) {
            $table->id();
            $table->string('author_name');
            $table->timestamps();
        });

        Schema::create('book_category', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
        Schema::dropIfExists('book_author');
        Schema::dropIfExists('book_category');
    }
};
