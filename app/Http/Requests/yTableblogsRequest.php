<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class yTableblogsRequest extends FormRequest
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
            'title'=>'required|max:255',
            'slug'=>'required|max:255|unique:blogs,slug,'.$this->id,
            'short_description'=>'required|max:555',
            'description'=>'required',
        ];
    }
}
