<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Stage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Number;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;

/**
 * @extends ModelResource<Stage>
 */
class StageResource extends ModelResource
{
    protected string $model = Stage::class;

    protected string $title = 'Преимущества';
    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            Text::make('Заголовок', 'title'),
            Number::make('Порядок', 'order'),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Text::make('Заголовок', 'title'),
            TinyMce::make('Описание', 'description'),
            Number::make('Порядок', 'order'),
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            Text::make('Заголовок', 'title'),
            TinyMce::make('Описание', 'description'),
            Number::make('Порядок', 'order'),
        ];
    }

    /**
     * @param Stage $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'order' => ['required', 'integer'],
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Заголовок', 'title'),
        ];
    }
}
