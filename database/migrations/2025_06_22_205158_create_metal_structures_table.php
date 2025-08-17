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
        Schema::create('metal_structures', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->comment('Заголовок');
            $table->integer('order')->default(0)->comment('Порядок сортировки');
            $table->string('sub_title')->nullable()->comment('Подзаголовок');
            $table->string('slug')->unique()->comment('Слаг');
            $table->string('template')->nullable()->comment('Имя шаблона');
            $table->string('img', 800)->nullable()->comment('Картинка страницы');
            $table->longText('description')->nullable()->comment('Текст страницы');
            $table->json('images')->nullable()->comment('Галерея изображений');
            $table->json('files')->nullable()->comment('Файлы');
            $table->json('sections')->nullable()->comment('Информациф по секциям');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metal_structures');
    }
};
