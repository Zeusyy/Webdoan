<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::user())
            return true;
        else
            return false;
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
            'email'          => 'required|email|string|max:255',
            'name'           => 'required|alpha|string|max:55',
            // 'phone'       => 'digits_between:10,11',
            'phone'          => 'digits_between:10,11',
            'avatar'         => 'mimes:jpeg,jpg,png,gif|max:10000',
            
        ];
    }
}
