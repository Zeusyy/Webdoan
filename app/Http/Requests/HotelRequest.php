<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class HotelRequest extends FormRequest
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
            'address'       => 'required|string|max:255',
            'cityProvince'  => 'required',
            'price'         => 'required',
            'avatar'        => 'required_if:formType,create|mimes:jpeg,jpg,png,gif|max:10000',
        ];
    }
}
