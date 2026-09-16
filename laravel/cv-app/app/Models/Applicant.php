<?php

namespace App\Models;

use App\Models\Enums\Gender;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Collection;


class Applicant extends Model implements ApplicantInterface
{
    use HasFactory;


    public const TABLE_NAME = "applicants";

    public const FIELD_ID = "id";

    public const FIELD_FIRST_NAME = "first_name";
    public const FIELD_MID_NAME = "mid_name";
    public const FIELD_LAST_NAME = "last_name";
    public const FIELD_EMAIL = "email";
    public const FIELD_PHONE = "phone";
    public const FIELD_GENDER = "gender";
    public const FIELD_BIRTH_DATE = "birth_date";

    public const FIELD_CREATED_AT = "created_at";
    public const FIELD_UPDATED_AT = "updated_at";

    public const FILLABLE = [
        self::FIELD_FIRST_NAME,
        self::FIELD_MID_NAME,
        self::FIELD_LAST_NAME,
        self::FIELD_EMAIL,
        self::FIELD_PHONE,
        self::FIELD_GENDER,
        self::FIELD_BIRTH_DATE,
    ];
    public const CASTS = [
        self::FIELD_GENDER => Gender::class,
        self::FIELD_BIRTH_DATE => 'datetime:Y-m-d'
    ];

    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    /**
     * @return BelongsToMany
     */
    public function skills()
    {
        return $this->belongsToMany(Skill::class, ApplicantSkill::TABLE_NAME);
    }

    /**
     * @return BelongsToMany
     */
    public function universities()
    {
        return $this->belongsToMany(
            University::class,
            Education::TABLE_NAME,
            Education::FIELD_UNV_ID,
            Education::FIELD_APPLICANT_ID
        );
    }

    public function getId(): int
    {
        return $this->getAttribute(self::FIELD_ID);
    }


    public function getFirstName(): string
    {
        return $this->getAttribute(self::FIELD_FIRST_NAME);
    }

    public function setFirstName(string $firstName): static
    {
        $this->setAttribute(self::FIELD_FIRST_NAME, $firstName);
        return $this;
    }

    public function getMidName(): string
    {
        return $this->getAttribute(self::FIELD_MID_NAME);
    }

    public function setMidName(string $midName): static
    {
        $this->setAttribute(self::FIELD_MID_NAME, $midName);
        return $this;
    }

    public function getLastName(): string
    {
        return $this->getAttribute(self::FIELD_LAST_NAME);
    }

    public function setLastName(string $lastName): static
    {
        $this->setAttribute(self::FIELD_LAST_NAME, $lastName);
        return $this;
    }

    public function getEmail(): string
    {
        return $this->getAttribute(self::FIELD_EMAIL);
    }

    public function setEmail(string $email): static
    {
        $this->setAttribute(self::FIELD_EMAIL, $email);
        return $this;
    }

    public function getPhone(): string
    {
        return $this->getAttribute(self::FIELD_PHONE);
    }

    public function setPhone(string $phone): static
    {
        $this->setAttribute(self::FIELD_PHONE, $phone);
        return $this;
    }

    public function getGender(): string
    {
        return $this->getAttribute(self::FIELD_GENDER);
    }

    public function setGender(string $gender): static
    {
        $this->setAttribute(self::FIELD_GENDER, $gender);
        return $this;
    }

    public function getBirthDate(): string
    {
        return $this->getAttribute(self::FIELD_BIRTH_DATE);
    }

    public function setBirthDate(string $birthDate): static
    {
        $this->setAttribute(self::FIELD_BIRTH_DATE, $birthDate);
        return $this;
    }

    public function getUniversities(): Collection
    {
        return $this->universities;
    }

    public function addUniversity(UniversityInterface $university): static
    {
        return $this;
    }

    public function getSkills(): Collection
    {
        return $this->skills;
    }

    public function addSkill(SkillInterface $skill): static
    {
//        $this->skills()->save($skill);
        return $this;
    }

    public function getEducations(): Collection
    {
        return $this->educations;
    }

    public function addEducation(EducationInterface $education): static
    {
//        $this->educations()->save($education);
        return $this;
    }
}
