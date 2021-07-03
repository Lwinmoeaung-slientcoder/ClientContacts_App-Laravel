<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'project_name'=>'required',
            'contactname'=>'required',
            'project_member'=>'required|integer',
            'amount'=>'required|integer',
            'state'=>'required|string',
            'company'=>'required',
            'startdate'=>'required',
            'enddate'=>'nullable',
        ];
    }
}
