<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductApiRequest extends FormRequest
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


    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'rating' => 'required|numeric',
            'quantity' => 'required|numeric',
            'category' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name field is so much important bro. so please give name field.',
        ];
    }
}
