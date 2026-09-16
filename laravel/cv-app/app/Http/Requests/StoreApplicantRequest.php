<?php

namespace App\Http\Requests;

class StoreApplicantRequest extends AbstractApplicantRequest
{


    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array|\Illuminate\Contracts\Validation\ValidationRule[]|\mixed[][]|string[]
     */
    public function rules(): array
    {
        $rules = $this->getRules();
        unset($rules[self::FIELD_ID]);
        return $rules;
    }
}
