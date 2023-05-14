<?php

namespace App\Http\Requests\Fake;

use Illuminate\Foundation\Http\FormRequest;

class FakeLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:3|max:8'
        ];
    }

    public function messages ()
    {
        return [
            'email' => 'Email inválido',
            'required' => 'O campo deve ser preenchido.',
            'min' => 'A senha deve ter no mínimo :min caracteres.',
            'max' => 'A senha deve ter no máximo :max caracteres.'
        ];
    }
}
