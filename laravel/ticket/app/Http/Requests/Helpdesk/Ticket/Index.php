<?php

namespace App\Http\Requests\Helpdesk\Ticket;

use App\Http\Requests\Helpdesk\ApiRequestValidator;
use App\Http\Requests\Helpdesk\IndexRequest;

class Index extends ApiRequestValidator implements IndexRequest
{
    public function rules()
    {
        return [
            'per_page'  => ['nullable', 'numeric']
        ];
    }
}
