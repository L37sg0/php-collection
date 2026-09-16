<?php

namespace App\Http\Requests;

use App\Models\Enums\Gender;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

abstract class AbstractApplicantRequest extends FormRequest
{
    public const FIELD_ID = 'id';
    public const FIELD_FIRST_NAME = 'first_name';
    public const FIELD_MID_NAME = 'mid_name';
    public const FIELD_LAST_NAME = 'last_name';
    public const FIELD_EMAIL = 'email';
    public const FIELD_PHONE = 'phone';
    public const FIELD_GENDER = 'gender';
    public const FIELD_BIRTH_DATE = 'birth_date';

    protected function getRules(): array
    {
        return [
            self::FIELD_ID          => ['required', 'numeric', 'exists:applicants,' . self::FIELD_ID],
            self::FIELD_FIRST_NAME  => ['required', 'string', 'max:50'],
            self::FIELD_MID_NAME    => ['required', 'string', 'max:50'],
            self::FIELD_LAST_NAME   => ['required', 'string', 'max:50'],
            self::FIELD_EMAIL       => ['required', 'string', 'email', 'max:50', 'unique:applicants'],
            self::FIELD_PHONE       => ['required', 'string', 'max:15', 'unique:applicants'],
            self::FIELD_GENDER      => ['required', 'numeric', new Enum(Gender::class)],
            self::FIELD_BIRTH_DATE  => ['required', 'date', 'date_format:Y-m-d'],
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
