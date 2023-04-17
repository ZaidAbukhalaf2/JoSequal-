<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'logo' => ' required|dimensions:min_width=100,min_height=100'
        ];
    }


    public function messages(){

        return [
            'name.required'=>'this field is required',
            'logo.dimensions'=>'logo must be minimum 100x100'
        ];

    }
}
