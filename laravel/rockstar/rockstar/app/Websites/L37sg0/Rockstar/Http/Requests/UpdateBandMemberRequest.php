<?php

namespace L37sg0\Rockstar\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use L37sg0\Rockstar\Rules\Image;

class UpdateBandMemberRequest extends FormRequest
{

    public function rules()
    {
        return [
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:4096', new Image(512, 512)],
            'name' => 'required',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return ['band.image' => 'Image should be with max of 512x512 px.'];
    }
}
