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
            'category_id' => 'required|numeric||digits_between:1,10',
            'name'        => 'required',
            'description' => 'required',
            'amount'      => 'required|numeric|min:1.0',
            'fee'         => 'required|numeric|min:0.0001',
            'image'       => 'mimes:jpeg,jpg,png,gif|required|max:10000' // max 10000kb
        ];
    }
    public function messages()
    {
        return [
            'category_id.required' => 'Category name is required',
            'name.required'        => 'Product name is required',
            'description.required' => 'Product description is required',
            'amount.required'      => 'Product amount is required',
            'fee.required'         => 'Product fee is required',
            'image.required'       => 'Product image is required',
            'image.mimes'          => 'Invalid image',
        ];
    }
}
