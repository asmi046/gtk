<?php

namespace App\Http\Requests\Consultation;

use Illuminate\Foundation\Http\FormRequest;

class TeamFormRequest extends FormRequest
{
    /**
     * Определяет, авторизован ли пользователь на выполнение запроса.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Сообщения об ошибках для правил валидации.
     */
    public function messages()
    {
        return [
            'phone.required' => 'Поле "Телефон" должно быть заполнено',
        ];
    }

    /**
     * Правила валидации для запроса.
     */
    public function rules(): array
    {
        return [
            'name' => ['nullable', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
        ];
    }
}
