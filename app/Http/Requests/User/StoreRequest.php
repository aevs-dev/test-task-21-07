<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function validationData(): array
    {
        return $this->post();
    }


    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'max:255', 'email:rfc,dns', 'unique:users'],
            'password' => ['required', 'string', 'max:64'],
            'gender' => ['required', 'string', 'in:male,female']
        ];
    }

    public function messages(): array
    {
        return [
            'password.required' => 'Пароль не может быть пустым',
            'password.max' => 'Пароль не может превышать 64 символа',
            'password.string' => 'Пароль должен быть строкой',


            'email.required' => 'Почта не может быть пустой',
            'email.max' => 'Почта не может превышать 255 символов',
            'email.string' => 'Почта должна быть строкой',
            'email.email' => 'Некорректный формат почты',
            'email.unique' => 'Почта уже занята!',

            'gender.required' => 'Пол не может быть пустым',
            'gender.string' => 'Пол должен быть строкой',
            'gender.in' => 'Недопустимое значение пола',

        ];
    }

}
