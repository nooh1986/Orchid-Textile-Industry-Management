<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OutputRequest extends FormRequest
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
            'machine_id' => 'required',
            'string_id'  => 'required',
            'date'       => 'required',
            'gear'       => 'required|numeric',
            'quantity'   => 'required|numeric',
            'price'      => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'machine_id.required' => 'The :attribute هذا الحقل مطلوب.',
            'string_id.required'  => 'The :attribute هذا الحقل مطلوب.',
            'date.required'       => 'The :attribute هذا الحقل مطلوب.',
            'gear.required'       => 'The :attribute هذا الحقل مطلوب.',
            'gear.numeric'        => 'The :attribute هذا الحقل يجب ان يكون رقما .',
            'quantity.required'   => 'The :attribute هذا الحقل مطلوب.',
            'quantity.numeric'    => 'The :attribute هذا الحقل يجب ان يكون رقما .',
            'price.required'      => 'The :attribute هذا الحقل مطلوب.',
            'price.numeric'       => 'The :attribute هذا الحقل يجب ان يكون رقما .',
        ];
    }
}
