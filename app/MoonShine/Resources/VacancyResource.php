<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Vacancy;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Fields\Text;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;

/**
 * @extends ModelResource<Vacancy>
 */
class VacancyResource extends ModelResource
{
    protected string $model = Vacancy::class;

    protected string $title = 'Вакансии';
    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            Text::make('Вакансия', 'title'),
            Text::make('Город', 'city'),
            Text::make('Компания', 'company_name'),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Text::make('Вакансия', 'title'),
            Text::make('Компания', 'company_name'),
            Text::make('Город', 'city'),
            TinyMce::make('Описание', 'description'),
            Text::make('Тип зпнятости', 'employment_type'),
            Text::make('Расписание', 'work_schedule'),
            Text::make('Заработная плата', 'salary'),
            Text::make('Стаж', 'experience'),
            Text::make('Образование', 'education'),
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            Text::make('Вакансия', 'title'),
            Text::make('Компания', 'company_name'),
            Text::make('Город', 'city'),
            TinyMce::make('Описание', 'description'),
            Text::make('Тип зпнятости', 'employment_type'),
            Text::make('Расписание', 'work_schedule'),
            Text::make('Заработная плата', 'salary'),
            Text::make('Стаж', 'experience'),
            Text::make('Образование', 'education'),
        ];
    }

    /**
     * @param Vacancy $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string'],
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Вакансия', 'title'),
            TinyMce::make('Описание', 'description'),
        ];
    }
}
