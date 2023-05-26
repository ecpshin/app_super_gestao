<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class OrdersStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'client_id' => 'required|integer|exists:clients,id'
        ];
    }

    public function messages()
    {
        return [
            'exists' => 'Selecione um cliente válido',
            'integer' => 'Informe um cliente válido',
            'required' => 'O campo cliente é obrigatório'
        ];
    }
}
