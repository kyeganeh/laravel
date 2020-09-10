<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validFormRequest extends FormRequest
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
            'title'=>'required',
            'description'=>'required',
            'file'=>['required','mimes:png,jog,jpeg','max:1000']
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'لطفا عنوان را وارد کنید',
            'description.required'=>'لطفا متن پست را وارد کنید',
            'file.required'=>'لطفا فایل را وارد کنید',
            'file.mimes'=>'لطفا فرمت صحیح فایل را آپلود کنید',
            'file.max'=>'حجم فایل بیش از 1 مگابایت می باشد'
        ];
    }
}
