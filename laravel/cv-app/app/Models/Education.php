<?php

namespace App\Models;

use App\Models\Enums\Degree;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model implements EducationInterface
{
    use HasFactory;

    public const TABLE_NAME = "educations";

    public const FIELD_ID = "id";

    public const FIELD_APPLICANT_ID = "applicant_id";
    public const FIELD_UNV_ID = 'unv_id';
    public const FIELD_DATE_FROM = "date_from";
    public const FIELD_DATE_TO = "date_to";
    public const FIELD_DEGREE = "degree";
    public const FIELD_SPECIALTY = "specialty";
    public const FIELD_ACCREDITATION_ASSESSMENT = "accreditation_assessment";

    public const FIELD_CREATED_AT = "created_at";
    public const FIELD_UPDATED_AT = "updated_at";

    public const FILLABLE = [
        self::FIELD_APPLICANT_ID,
        self::FIELD_UNV_ID,
        self::FIELD_DATE_FROM,
        self::FIELD_DATE_TO,
        self::FIELD_DEGREE,
        self::FIELD_SPECIALTY,
        self::FIELD_ACCREDITATION_ASSESSMENT,
    ];
    public const CASTS = [
        self::FIELD_DEGREE => Degree::class,
        self::FIELD_DATE_FROM => 'datetime:Y-m-d',
        self::FIELD_DATE_TO => 'datetime:Y-m-d'
    ];

    protected $table = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts = self::CASTS;

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }

    public function university()
    {
        return $this->belongsTo(University::class, self::FIELD_UNV_ID);
    }

    public function getId(): int
    {
        return $this->getAttribute(self::FIELD_ID);
    }

    public function getApplicantId(): int
    {
        return $this->getAttribute(self::FIELD_APPLICANT_ID);
    }

    public function setApplicantId(int $applicantId): static
    {
        $this->setAttribute(self::FIELD_APPLICANT_ID, $applicantId);
        return $this;
    }

    public function getUniversityId(): int
    {
        return $this->getAttribute(self::FIELD_UNV_ID);
    }

    public function setUniversityId(int $universityId): static
    {
        $this->setAttribute(self::FIELD_UNV_ID, $universityId);
        return $this;
    }

    public function getDateFrom(): string
    {
        return $this->getAttribute(self::FIELD_DATE_FROM);
    }

    public function setDateFrom(string $dateFrom): static
    {
        $this->setAttribute(self::FIELD_DATE_FROM, $dateFrom);
        return $this;
    }

    public function getDateTo(): string
    {
        return $this->getAttribute(self::FIELD_DATE_TO);
    }

    public function setDateTo(string $dateTo): static
    {
        $this->setAttribute(self::FIELD_DATE_TO, $dateTo);
        return $this;
    }

    public function getDegree(): string
    {
        return $this->getAttribute(self::FIELD_DEGREE);
    }

    public function setDegree(string $degree): static
    {
        $this->setAttribute(self::FIELD_DEGREE, $degree);
        return $this;
    }

    public function getSpecialty(): string
    {
        return $this->getAttribute(self::FIELD_SPECIALTY);
    }

    public function setSpecialty(string $specialty): static
    {
        $this->setAttribute(self::FIELD_SPECIALTY, $specialty);
        return $this;
    }

    public function getAccreditationAssessment(): float
    {
        return $this->getAttribute(self::FIELD_ACCREDITATION_ASSESSMENT);
    }

    public function setAccreditationAssessment(float $accreditationAssessment): static
    {
        $this->setAttribute(self::FIELD_ACCREDITATION_ASSESSMENT, $accreditationAssessment);
        return $this;
    }

    public function getApplicant(): ApplicantInterface
    {
        return $this->applicant;
    }

    public function setApplicant(ApplicantInterface $applicant): static
    {
        $this->applicant = $applicant;
        return $this;
    }

    public function getUniversity(): UniversityInterface
    {
        return $this->university;
    }

    public function setUniversity(UniversityInterface $university): static
    {
        $this->university = $university;
        return $this;
    }


}
