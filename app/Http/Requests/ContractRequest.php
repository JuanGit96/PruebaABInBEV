<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContractRequest extends FormRequest
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
            'date' => 'required',
            'file' => 'required',
            'employee_id' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'el campo name es obligatorio',
            'date.required' => 'el campo date es obligatorio',
            'file.required' => 'el campo file es obligatorio',
            'employee_id.required' => 'el campo employee_id es obligatorio',
        ];
    }
}
