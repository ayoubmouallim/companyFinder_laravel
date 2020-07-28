<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class companyRequest extends FormRequest
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
                'name'=>'required | max:100|unique:companies,company_title',
                'address'=>'required ',
                'email'=>'required ',
                'sector_id'=>'required ',
                'website'=>'required ',
                'number'=>'required ',
                'city'=>'required ',
                'sector'=>'required ',
        ];
    }

    public function messages(){
        return ['name.required'=>'name field is empty' ];
    }
}
