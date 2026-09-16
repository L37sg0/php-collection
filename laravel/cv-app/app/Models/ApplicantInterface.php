<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;

interface ApplicantInterface
{
    public function getId(): int;

    public function getFirstName(): string;
    public function setFirstName(string $firstName): static;

    public function getMidName(): string;
    public function setMidName(string $midName): static;

    public function getLastName(): string;
    public function setLastName(string $lastName): static;

    public function getEmail(): string;
    public function setEmail(string $email): static;

    public function getPhone(): string;
    public function setPhone(string $phone): static;

    public function getGender(): string;
    public function setGender(string $gender): static;

    public function getBirthDate(): string;
    public function setBirthDate(string $birthDate): static;

    public function getUniversities(): Collection;
    public function addUniversity(UniversityInterface $university): static;

    public function getSkills(): Collection;
    public function addSkill(SkillInterface $skill): static;

    public function getEducations(): Collection;
    public function addEducation(EducationInterface $education): static;

    /**
     * @param $relations
     * @return mixed
     */
    public function load($relations);

}
