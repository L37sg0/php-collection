<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Skill extends Model implements SkillInterface
{
    use HasFactory;


    public const TABLE_NAME = "skills";

    public const FIELD_ID = "id";

    public const FIELD_NAME = "name";

    public const FIELD_CREATED_AT = "created_at";
    public const FIELD_UPDATED_AT = "updated_at";

    public const FILLABLE = [self::FIELD_NAME];
    public const CASTS = [];

    protected $table = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts = self::CASTS;

    /**
     * @return BelongsToMany
     */
    public function applicants()
    {
        return $this->belongsToMany(Applicant::class, ApplicantSkill::TABLE_NAME);
    }

    public function getId(): int
    {
        return $this->getAttribute(self::FIELD_ID);
    }

    public function getName(): string
    {
        return $this->getAttribute(self::FIELD_NAME);
    }

    public function setName(string $name): static
    {
        $this->setAttribute(self::FIELD_NAME, $name);
        return $this;
    }

    public function getApplicants(): Collection
    {
        return $this->applicants;
    }

    public function addApplicant(ApplicantInterface $applicant): static
    {
//        $this->applicants()->save($applicant);
        return $this;
    }
}
