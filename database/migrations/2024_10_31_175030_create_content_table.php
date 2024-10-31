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
        Schema::create('content', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('writer_id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('writer_id')->references('writer_id')->on('writer')->onDelete('cascade'); // Foreign key
            $table->foreign('category_id')->references('category_id')->on('category')->onDelete('cascade'); // Foreign key
            $table->string('profile_image')->default(null)->nullable();
            $table->string('title');
            $table->text('body');
            $table->timestamp('posted_at')->default(now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content');
    }
};
