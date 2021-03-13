<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'type_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'el campo name es obligatorio',
            'phone.required' => 'el campo phone es obligatorio',
            'address.required' => 'el campo address es obligatorio',
            'type_id.required' => 'el campo type_id es obligatorio',
        ];
    }
}
