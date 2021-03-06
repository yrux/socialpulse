<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class yTableproductsRequest extends FormRequest
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
            'name'=>'required|max:255',
            'slug'=>'required|max:300|unique:products,slug,'.$this->id,
            'price'=>'required',
            'category_id'=>'required',
        ];
    }
}
