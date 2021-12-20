<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class TourRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::user()->role->name != 'user')
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
            'name'              => 'required|string|max:50',
            'departure_place'   => 'required|string|max:10',
            'passenger_num'     => 'required|max:3',
            'price'             => 'required|max:15',
            'day_number'        => 'required|max:3',
            'content'           => 'required|string|max:200',
            'departure_minute'  => 'required|max:2',
            'departure_hour'    => 'required|max:2',
            'subTripTitle'      => 'array|min:1',
            'subTripTitle.*'    => 'string',
            'avatar'            => 'required_if:formType,create|mimes:jpeg,jpg,png,gif|max:10000',
        ];
    }
}
