<?php

namespace L37sg0\Rockstar\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use L37sg0\Rockstar\Rules\Image;

class UpdateHomeImageRequest extends FormRequest
{
    public function rules()
    {
        return [
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:4096', new Image(1920, 1280)]
        ];
    }

    public function messages()
    {
        return ['home.dimensions' => 'Image should be with max of 1920x1280 px.'];
    }
}
