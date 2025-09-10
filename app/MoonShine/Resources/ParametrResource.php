<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Parametr;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Textarea;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use Illuminate\Validation\Rule;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<Parametr>
 */
class ParametrResource extends ModelResource
{
    protected string $model = Parametr::class;

    protected string $title = 'Параметры сайта';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Идентификатор', 'str_id'),
            Text::make('Секция вывода', 'section'),
            Text::make('Заголовок', 'title'),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Text::make('Идентификатор', 'str_id'),
                Text::make('Секция вывода', 'section'),
                Text::make('Заголовок', 'title'),
                Textarea::make('Значение', 'value'),
                Image::make('Изображение', 'img')->dir('parametr'),
            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Идентификатор', 'str_id'),
            Text::make('Секция вывода', 'section'),
            Text::make('Заголовок', 'title')->unescape(),
            Textarea::make('Значение', 'value')->unescape(),
            Image::make('Изображение', 'img')->dir('parametr'),
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Секция вывода', 'section'),
            Text::make('Значение', 'value'),
        ];
    }


    /**
     * @param Parametr $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            "str_id" => ['required', Rule::unique('parametrs')->ignore($item->id)],
            "section" => ['required'],
        ];
    }
}
