<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LanguageRequest extends FormRequest
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
        return[
            'name' =>'required|max:100|string' ,
            'abbr' =>'required|max:10|string' ,
           // 'active' =>'required|in:0,1' ,
            'direction' =>'required|in:rtl,ltr' ,
        ];

    }

    public function messages()
    {
        return [
            'required' => 'هذا الحقل مطلوب.',
            'in' => 'القيم المدخلة غير صحيحة.',
            'abbr.string' => 'اختصار اللغة لابد ان يكون حروف.',
            'abbr.max' => 'عدد الاحرف لا يزيد عن 10.',
            'name.string' => 'اسم اللغة لابد ان يكون حروف.',
            'name.max' => 'عدد الاحرف لا يزيد عن 100.',
        ];
    }
}
