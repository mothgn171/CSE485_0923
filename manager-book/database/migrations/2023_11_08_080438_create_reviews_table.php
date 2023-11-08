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
        Schema::create('reviews', function (Blueprint $table) {
                $table->increments('reviewID');
                $table->unsignedBigInteger('BookID');
                $table->unsignedBigInteger('UserID');
                $table->integer('rating');
    
                $table->string('ReviewText');
                $table->date('ReviewDate');
    
                $table->foreign('BookID')->references('id')->on('books')->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
