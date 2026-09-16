<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicantSkill extends Model
{
    public const TABLE_NAME = 'applicant_skill';

    public const FIELD_APPLICANT_ID = 'applicant_id';
    public const FIELD_SKILL_ID = 'skill_id';
    public const FILLABLE = [
        self::FIELD_APPLICANT_ID,
        self::FIELD_SKILL_ID
    ];

    protected $table = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
//    public $timestamps = false;
}
