<?php

namespace App\Http\Requests\Clients;

use Illuminate\Foundation\Http\FormRequest;

class ClientStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|min:3|max:100',
            'cep' => 'string|max:10',
            'logradouro' => 'string|max:255',
            'complemento' => 'string|max:50',
            'bairro' => 'string|max: 100',
            'localidade' => 'string|max:100',
            'uf' => 'max:2'
        ];
    }

    public function messages(): array
    {
        return [
            'min' => 'O campo deve ter no mínimo :min caracteres',
            'max' => 'O campo deve ter no máximo :max caracteres',
            'required' => 'Campo deve ser preenchido',
            'string' => 'O campo deve conter uma string.'
        ];
    }
}
