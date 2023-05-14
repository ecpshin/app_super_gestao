<?php

namespace App\Http\Requests\Supplier;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
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
            'nome' => 'required',
            'site' => 'required',
            'email' => 'email',
            'uf' => 'required'
        ];
    }

    public function messages ()
    {
        return [
            'required' => 'Campo deve ser preenchido.',
            'email' => 'Informe um e-mail válido',
        ];
    }
}
