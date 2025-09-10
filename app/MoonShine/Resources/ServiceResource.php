<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Service;
use MoonShine\UI\Fields\ID;


use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\Laravel\Fields\Slug;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\TinyMce\Fields\TinyMce;

/**
 * @extends ModelResource<Service>
 */
class ServiceResource extends ModelResource
{
    protected string $model = Service::class;

    protected string $title = 'Услуги';
    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            Text::make('Заголовок', 'title'),
            Image::make('Картинка услуги', 'img')->dir(''),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Text::make('Заголовок', 'title'),
            Text::make('Слаг', 'slug'),
            Text::make('Имя шаблона', 'template'),
            Image::make('Картинка услуги', 'img')->dir(''),
            TinyMce::make('Описание услуги', 'description'),
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            Text::make('Заголовок', 'title'),
            Text::make('Слаг', 'slug'),
            Text::make('Имя шаблона', 'template'),
            Image::make('Картинка услуги', 'img')->dir(''),
            TinyMce::make('Описание услуги', 'description'),
        ];
    }

    /**
     * @param Service $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Заголовок', 'title'),
            Text::make('Описание услуги', 'description'),
        ];
    }
}
