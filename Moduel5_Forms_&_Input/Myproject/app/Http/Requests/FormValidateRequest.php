<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidateRequest extends FormRequest
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
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pname'=>'required',
            'desc'=>'required',
            'price'=>'required',
            'qty'=>'required',
        ];
    }
    //For Custome Message
    public function messages(){
        return [
            'pname.required'=>'ProductName Required',
        ];    
    }
}
