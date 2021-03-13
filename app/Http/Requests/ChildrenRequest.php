<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChildrenRequest extends FormRequest
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
            'age' => 'required',
            'employee_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'el campo name es obligatorio',
            'age.required' => 'el campo age es obligatorio',
            'employee_id.required' => 'el campo employee_id es obligatorio',
        ];
    }
}
