<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class RoomTypeRequest extends FormRequest
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
            //
            'name'          => 'required|string|min:5|max:50',
            'bed_num'       => 'required',
            'bed_type'      => 'required',
            'area'          => 'required|numeric',
            'price'         => 'required|numeric',
            'avatar'        => 'required_if:formType,create|mimes:jpeg,jpg,png,gif|max:10000',
        ];
    }
}
