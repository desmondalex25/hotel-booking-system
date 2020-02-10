<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoomRequest extends FormRequest
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

            'category_id' => 'required',
            'room_number' => 'required',
            'bed_count' => 'required|numeric',
            'phone' => 'required|numeric',
            'status',
            'image',
            'description'

        ];
    }
}
