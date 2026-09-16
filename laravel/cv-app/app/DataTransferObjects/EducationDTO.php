<?php

namespace App\DataTransferObjects;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;

class EducationDTO implements Arrayable
{
    private const FIELD_APPLICANT_ID = "applicant_id";
    private const FIELD_UNV_ID = 'unv_id';
    private const FIELD_DATE_FROM = "date_from";
    private const FIELD_DATE_TO = "date_to";
    private const FIELD_DEGREE = "degree";
    private const FIELD_SPECIALTY = "specialty";
    private const FIELD_ACCREDITATION_ASSESSMENT = "accreditation_assessment";

    private string $applicantId;
    private string $universityId;
    private string $dateFrom;
    private string $dateTo;
    private string $degree;
    private string $specialty;
    private string $accreditationAssessment;

    private function __construct(array $data)
    {
        $this->applicantId              = $data[self::FIELD_APPLICANT_ID];
        $this->universityId             = $data[self::FIELD_UNV_ID];
        $this->dateFrom                 = $data[self::FIELD_DATE_FROM];
        $this->dateTo                   = $data[self::FIELD_DATE_TO];
        $this->degree                   = $data[self::FIELD_DEGREE];
        $this->specialty                = $data[self::FIELD_SPECIALTY];
        $this->accreditationAssessment  = $data[self::FIELD_ACCREDITATION_ASSESSMENT];
    }

    public function toArray(): array
    {
        return [
            self::FIELD_APPLICANT_ID                => $this->applicantId,
            self::FIELD_UNV_ID                      => $this->universityId,
            self::FIELD_DATE_FROM                   => $this->dateFrom,
            self::FIELD_DATE_TO                     => $this->dateTo,
            self::FIELD_DEGREE                      => $this->degree,
            self::FIELD_SPECIALTY                   => $this->specialty,
            self::FIELD_ACCREDITATION_ASSESSMENT    => $this->accreditationAssessment,
        ];
    }

    public static function fromRequest(Request $request): static
    {
        $data = $request->all();
        return new self($data);
    }

    public function getApplicantId(): string
    {
        return $this->applicantId;
    }

    public function getUniversityId(): string
    {
        return $this->universityId;
    }

    public function getDateFrom(): string
    {
        return $this->dateFrom;
    }

    public function getDateTo(): string
    {
        return $this->dateTo;
    }

    public function getDegree(): string
    {
        return $this->degree;
    }

    public function getSpecialty(): string
    {
        return $this->specialty;
    }

    public function getAccreditationAssessment(): string
    {
        return $this->accreditationAssessment;
    }

}
