<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class yTableordersRequest extends FormRequest
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
            'first_name'=>'required|max:100',
            'last_name'=>'required|max:100',
            'company_name'=>'max:255',
            'address'=>'required|max:255',
            'address2'=>'max:255',
            'city'=>'required|max:100',
            'email'=>'required|max:255|email',
            'phone'=>'required|max:100',
            // 'total_products'=>'required',
            // 'subtotal'=>'required',
            // 'total'=>'required',
        ];
    }
}
