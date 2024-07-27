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
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
        $table->string('subject');
        $table->text('body');
        $table->string('sender');
        $table->unsignedBigInteger('category_id')->nullable();
        $table->timestamps();

        $table->foreign('category_id')->references('id')->on('email_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emails');
    }
};
