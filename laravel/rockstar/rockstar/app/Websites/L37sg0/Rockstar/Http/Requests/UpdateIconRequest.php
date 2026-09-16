<?php

namespace L37sg0\Rockstar\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use L37sg0\Rockstar\Rules\Icon;

class UpdateIconRequest extends FormRequest
{
    public function rules() {
        return [
            'icon' => ['required','image','mimes:jpeg,png,jpg','max:2048', new Icon(512, 512)]
        ];
    }

    public function messages()
    {
        return [
            'icon.dimensions' => 'The icon should be square with max of 512x512 pixels.'
        ];
    }

}
