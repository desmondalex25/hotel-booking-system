<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCustomerRequest extends FormRequest
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
            'name' => 'required|string|max:100',
            'email' => 'required|unique:customers',
            'gender' => 'required|string',
            'country' => 'required',
            'state' => 'required',
            'address' => 'required|max:255',
            'phone' => 'required|numeric',
            'image'
        ];
    }
}
