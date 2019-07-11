<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required',
            'stock' => 'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Поле :attribute не заполнено',
            'numeric' => 'Поле :attribute должно быть числом'
        ];
    }
    public function attributes()
    {
        return [
            'stock' => '"Наличие"',
            'name' => '"Название продукта"'
        ];
    }
}
