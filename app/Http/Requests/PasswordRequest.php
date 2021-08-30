<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
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
            'password' => 'required|confirmed|min:6'
        ];
    }

    public function messages()
    {
        return [
            'password.required'  => 'The :attribute هذا الحقل مطلوب.',
            'password.confirmed' => 'تطابق كلمه السر غير صحيح',
            'password.min'       => 'يجب استخدام 6 احرف على الاقل',
        ];
    }
}
