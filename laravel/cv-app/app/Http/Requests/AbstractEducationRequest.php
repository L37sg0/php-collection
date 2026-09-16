<?php

namespace App\Http\Requests;

use App\Models\Enums\Degree;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

abstract class AbstractEducationRequest extends FormRequest
{
    public const FIELD_ID                       = 'id';
    public const FIELD_APPLICANT_ID             = "applicant_id";
    public const FIELD_UNV_ID                   = 'unv_id';
    public const FIELD_DATE_FROM                = "date_from";
    public const FIELD_DATE_TO                  = "date_to";
    public const FIELD_DEGREE                   = "degree";
    public const FIELD_SPECIALTY                = "specialty";
    public const FIELD_ACCREDITATION_ASSESSMENT = "accreditation_assessment";

    protected function getRules(): array
    {
        return [
            self::FIELD_ID                          => ['required', 'numeric', 'exists:educations,' . self::FIELD_ID],
            self::FIELD_APPLICANT_ID                => ['required', 'numeric', 'exists:applicants,id'],
            self::FIELD_UNV_ID                      => ['required', 'numeric', 'exists:universities,id'],
            self::FIELD_DATE_FROM                   => ['required', 'date', 'date_format:Y-m-d'],
            self::FIELD_DATE_TO                     => ['required', 'date', 'date_format:Y-m-d'],
            self::FIELD_DEGREE                      => ['required', 'numeric', new Enum(Degree::class)],
            self::FIELD_SPECIALTY                   => ['required', 'string', 'max:100'],
            self::FIELD_ACCREDITATION_ASSESSMENT    => ['required', 'decimal:2'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public abstract function authorize(): bool;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public abstract function rules(): array;
}
