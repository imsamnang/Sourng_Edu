<?php

namespace App\Http\Requests\Staff\Document;

use Illuminate\Foundation\Http\FormRequest;

class AddValidation extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    //todo::document mimes
    public function rules()
    {
        return [
            'reg_no'                => 'required | exists:staff,reg_no',
            'title'                 => 'required',
            'document_file'         => 'required|max:10000|mimes:pdf,doc,docx,ppt,xls,xlsx,jpeg,bmp,png',
        ];

    }

    public function messages()
    {
        return [
            /*'reg_no.required'               => 'Reg. No. Required.',*/
        ];


    }

}
