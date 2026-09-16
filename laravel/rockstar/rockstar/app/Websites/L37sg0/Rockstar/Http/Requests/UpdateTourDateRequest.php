<?php

namespace L37sg0\Rockstar\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTourDateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'date' => 'required',
            'place' => 'required'
        ];
    }
}
