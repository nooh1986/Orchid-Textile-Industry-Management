<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpenseRequset extends FormRequest
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
            'date'   => 'required',
            'amount' => 'required|numeric',
            'to'     => 'required',
        ];
    }


    public function messages()
    {
        return [
            'date.required'   => 'The :attribute هذا الحقل مطلوب.',
            'amount.numeric'  => 'The :attribute هذا الحقل يجب ان يكون رقما .',
            'amount.required' => 'The :attribute هذا الحقل مطلوب.',
            'to.required'     => 'The :attribute هذا الحقل مطلوب.',
        ];
    }
}
