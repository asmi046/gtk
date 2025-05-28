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
        Schema::create('parametrs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('str_id')->unique()->comment('Идентификатор');
            $table->string('section')->comment('Секция');
            $table->string('title')->nullable()->comment('Название');
            $table->string('value', 1500)->nullable()->comment('Знасение');
            $table->string('img', 500)->nullable()->comment('Изображение');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parametrs');
    }
};
