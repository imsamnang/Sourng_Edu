<?php

namespace App\Http\Requests\Staff\Registration;

use Illuminate\Foundation\Http\FormRequest;

class AddValidation extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'reg_no'                => 'required  | unique:staff,reg_no',
            'join_date'              => 'required',
            'designation'           => 'required',
            'first_name'            => 'required',
            'last_name'             => 'required',
            'date_of_birth'         => 'required',
            'nationality'           => 'required',
            'gender'                => 'required',
            'email'                 => 'required | unique:staff,email',
            'qualification'         => 'required',
            'institute_id'          => 'required',
            'main_image'            => 'mimes:jpeg,bmp,png',
            'village'               => 'required',
        ];

    }
}
