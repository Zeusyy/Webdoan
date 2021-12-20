<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ArticleRequest extends FormRequest
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
            'title'     => 'required|string|min:5|max:100',
            'abstract'  => 'required|string|min:10|max:100',
            'thumbnail' => 'required_if:formType,create|mimes:jpeg,jpg,png,gif|max:10000',
            'background'=> 'required_if:formType,create|mimes:jpeg,jpg,png,gif|max:10000',
            'content'   => 'required|string',
        ];
    }
}
