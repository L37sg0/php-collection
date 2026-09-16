<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;

interface SkillInterface
{
    public function getId(): int;

    public function getName(): string;
    public function setName(string $name): static;

    public function getApplicants(): Collection;
    public function addApplicant(ApplicantInterface $applicant): static;

}
