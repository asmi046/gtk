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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->comment('Вакансия');
            $table->text('company_name')->comment('Компания');
            $table->string('city')->nullable()->comment('Город');
            $table->text('description')->nullable()->comment('Описание');
            $table->string('employment_type')->nullable()->comment('Тип зпнятости');
            $table->string('work_schedule')->nullable()->comment('Расписание');
            $table->string('salary')->nullable()->comment('Заработная плата');
            $table->string('experience')->nullable()->comment('Стаж');
            $table->string('education')->nullable()->comment('Образование');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
