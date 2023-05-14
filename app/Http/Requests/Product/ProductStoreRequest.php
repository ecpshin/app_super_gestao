<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'descricao' => 'max:100',
            'peso' => 'integer',
            'unit_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'min' => 'O campo deve ter no mínimo :min caracteres',
            'max' => 'O campo deve ter no máximo :max caracteres',
            'integer' => 'O campo deve um número inteiro',
            'required' => 'O Campo|Opção é obrigatório.'
        ];
    }

}