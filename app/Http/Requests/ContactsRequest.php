<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required',
            'phonenumber'=>'required|digits:9',
            'phonenumber2'=>'nullable|digits:9',
            'position'=>'required',
            'company'=>'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg'
        ];
    }
}
