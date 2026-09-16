<?php

namespace App\Http\Requests;

class UpdateApplicantRequest extends AbstractApplicantRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        $rules = $this->getRules();
        return $rules;
    }
}
