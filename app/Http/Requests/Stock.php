<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Stock extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_product' => ['required', 'numeric'],
            'stock_quantity' => ['required', 'numeric', 'min:0', 'max:1000'],
        ];
    }
}
