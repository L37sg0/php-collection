<?php

namespace L37sg0\Rockstar\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSocialLinkRequest extends FormRequest
{
    public function rules()
    {
        return [
            'link' => 'required'
        ];
    }
}
