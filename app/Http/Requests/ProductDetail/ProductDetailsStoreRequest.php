<?php

namespace App\Http\Requests\ProductDetail;

use Illuminate\Foundation\Http\FormRequest;

class ProductDetailsStoreRequest extends FormRequest
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
            'product_id' => 'required',
            'unit_id' => 'required',
            'dimensoes' => 'required',
        ];
    }

    public function messages()
    {
        return  [
            'exists' => 'O :attribute informado não existe.',   
            'required' => 'O campo :attribute é requerido.'
        ];
    }
}