<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StringRequest extends FormRequest
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
            'customer_id' => 'required',
            'color'       => 'required',
            'date'        => 'required',
            'long'        => 'required|numeric',
            'count'       => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'customer_id.required' => 'The :attribute هذا الحقل مطلوب.',
            'color.required'       => 'The :attribute هذا الحقل مطلوب.',
            'date.required'        => 'The :attribute هذا الحقل مطلوب.',
            'long.required'        => 'The :attribute هذا الحقل مطلوب.',
            'long.numeric'         => 'The :attribute هذا الحقل يجب ان يكون رقما .',
            'count.required'       => 'The :attribute هذا الحقل مطلوب.',
            'count.numeric'        => 'The :attribute هذا الحقل يجب ان يكون رقما .',
        ];
    }
}
