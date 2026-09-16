<?php

namespace App\Models;

interface EducationInterface
{
    public function getId(): int;

    public function getApplicantId(): int;
    public function setApplicantId(int $applicantId): static;

    public function getUniversityId(): int;
    public function setUniversityId(int $universityId): static;

    public function getDateFrom(): string;
    public function setDateFrom(string $dateFrom): static;

    public function getDateTo(): string;
    public function setDateTo(string $dateTo): static;

    public function getDegree(): string;
    public function setDegree(string $degree): static;

    public function getSpecialty(): string;
    public function setSpecialty(string $specialty): static;

    public function getAccreditationAssessment(): float;
    public function setAccreditationAssessment(float $accreditationAssessment): static;

    public function getApplicant(): ApplicantInterface;
    public function setApplicant(ApplicantInterface $applicant): static;

    public function getUniversity(): UniversityInterface;
    public function setUniversity(UniversityInterface $university): static;

}
