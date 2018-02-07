<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\Validation\ValidatesWhenResolvedTrait;

class PictureUpload extends FormRequest
{
    // use ValidatesWhenResolvedTrait;
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
            'name'=> 'required|unique:blogs,name|max:255',
            'descript'=> 'required|max:255',
            'cover'=> 'required||image|mimes:jpeg,png,gif,jpg|max:2048'
        ];
    }
}
