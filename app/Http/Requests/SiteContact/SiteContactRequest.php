<?php

namespace App\Http\Requests\SiteContact;

use Illuminate\Foundation\Http\FormRequest;

class SiteContactRequest extends FormRequest
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
            'nome' => 'required|min:3|max:100',
            'telefone' => 'required',
            'email' => 'email',
            'subject_types_id' => 'required',
            'mensagem' => 'required|min:3|max:200'
        ];
    }

    public function messages()
    {
        return [
            'email' => 'Informe um e-mail válido!',
            'integer' => 'O campo :attribute inválido',
            'required' => 'O campo :attribute é obrigatório.',
            'string' => 'O campo :attribute deve conter uma string.',
            'min' => 'O campo :attribute deve conter no mínimo :min carateres.',
            'max' => 'O campo :attribute deve conter no máximo :max carateres.',
        ];
    }
}
