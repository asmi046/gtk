<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Json;

use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use App\Models\MetalStructures;
use MoonShine\UI\Fields\Position;
use MoonShine\TinyMce\Fields\TinyMce;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<MetalStructures>
 */
class MetalStructuresResource extends ModelResource
{
    protected string $model = MetalStructures::class;

    protected string $title = 'Металоконструкции';
    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            Text::make('Заголовок', 'title'),
            Image::make('Картинка страницы', 'img')->dir(''),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Text::make('Заголовок', 'title'),
            Text::make('Порядок сортировки', 'order'),
            Text::make('Подзаголовок', 'sub_title'),
            Text::make('Слаг', 'slug'),
            Text::make('Имя шаблона', 'template'),
            Image::make('Картинка страницы', 'img')->dir(''),
            TinyMce::make('Текст страницы', 'description'),
            Json::make('Галерея изображений', 'images')->fields([
                Position::make(),
                Image::make('Фото', 'img'),
                Text::make('Заголовок', 'title'),
            ])->removable(),
            Json::make('Файлы', 'files')->fields([
                Position::make(),
            ]),
            Json::make('Информациф по секциям', 'sections')->fields([
                Position::make(),
                Text::make('Секция', 'part'),
                Text::make('Заголовок', 'title'),
                Text::make('Контент', 'content'),
                Image::make('Фото', 'picture'),
                Text::make('Подзаголовок', 'sub_title'),
            ])->removable(),
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            Text::make('Заголовок', 'title'),
            Text::make('Порядок сортировки', 'order'),
            Text::make('Подзаголовок', 'sub_title'),
            Slug::make('Слаг', 'slug'),
            Text::make('Имя шаблона', 'template'),
            Image::make('Картинка страницы', 'img')->dir(''),
            TinyMce::make('Текст страницы', 'description'),
            Json::make('Галерея изображений', 'images')->fields([
                Position::make(),
                Image::make('Фото', 'img'),
                Text::make('Заголовок', 'title'),
            ])->removable(),
            Json::make('Файлы', 'files')->fields([
                Position::make(),
            ]),
            Json::make('Информациф по секциям', 'sections')->fields([
                Position::make(),
                Text::make('Секция', 'part'),
                Text::make('Заголовок', 'title'),
                Text::make('Контент', 'content'),
                Image::make('Фото', 'picture'),
                Text::make('Подзаголовок', 'sub_title'),
            ])->removable(),
        ];
    }

    /**
     * @param MetalStructures $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'order' => ['required', 'integer'],
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Заголовок', 'title'),
            Text::make('Текст страницы', 'description'),
        ];
    }
}
