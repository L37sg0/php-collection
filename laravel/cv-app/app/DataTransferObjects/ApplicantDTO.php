<?php

namespace App\DataTransferObjects;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;

class ApplicantDTO implements Arrayable
{
    private const FIELD_FIRST_NAME  = 'first_name';
    private const FIELD_MID_NAME    = 'mid_name';
    private const FIELD_LAST_NAME   = 'last_name';
    private const FIELD_EMAIL       = 'email';
    private const FIELD_PHONE       = 'phone';
    private const FIELD_GENDER      = 'gender';
    private const FIELD_BIRTH_DATE  = 'birth_date';

    private string $firstName;
    private string $middleName;
    private string $lastName;
    private string $email;
    private string $phone;
    private string $gender;
    private string $birthDate;

    private function __construct(array $data)
    {
        $this->firstName = $data[self::FIELD_FIRST_NAME];
        $this->middleName = $data[self::FIELD_MID_NAME];
        $this->lastName = $data[self::FIELD_LAST_NAME];
        $this->email = $data[self::FIELD_EMAIL];
        $this->phone = $data[self::FIELD_PHONE];
        $this->gender = $data[self::FIELD_GENDER];
        $this->birthDate = $data[self::FIELD_BIRTH_DATE];
    }

    public function toArray(): array
    {
        return [
            self::FIELD_FIRST_NAME  => $this->getFirstName(),
            self::FIELD_MID_NAME    => $this->getMiddleName(),
            self::FIELD_LAST_NAME   => $this->getLastName(),
            self::FIELD_EMAIL       => $this->getEmail(),
            self::FIELD_PHONE       => $this->getPhone(),
            self::FIELD_GENDER      => $this->getGender(),
            self::FIELD_BIRTH_DATE  => $this->getBirthDate(),
        ];
    }

    public static function fromRequest(Request $request): static
    {
        $data = $request->all();
        return new self($data);
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getMiddleName(): string
    {
        return $this->middleName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getBirthDate(): string
    {
        return $this->birthDate;
    }

}
