<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Geograpy;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\TinyMce;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;

/**
 * @extends ModelResource<Geograpy>
 */
class GeograpyResource extends ModelResource
{
    protected string $model = Geograpy::class;

    protected string $title = 'География';
    protected string $column = 'name';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            Text::make('Имя точки', 'name'),
            Text::make('Тип точки', 'type'),
            Text::make('Координаты', 'geo'),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Text::make('Имя точки', 'name'),
            Text::make('Тип точки', 'type'),
            Text::make('Координаты', 'geo'),
            TinyMce::make('Описание', 'description'),
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            Text::make('Имя точки', 'name'),
            Text::make('Тип точки', 'type'),
            Text::make('Координаты', 'geo'),
            TinyMce::make('Описание', 'description'),
        ];
    }

    /**
     * @param Geograpy $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'geo' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Имя точки', 'name'),
            Text::make('Тип точки', 'type'),
        ];
    }
}
