<?php

namespace Database\Factories;

use App\Models\Enums\Gender;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Applicant as Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Applicant>
 */
class ApplicantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = rand(
            min(array_column(Gender::cases(), 'value')),
            max(array_column(Gender::cases(), 'value'))
        );;

        return [
            Model::FIELD_FIRST_NAME => $this->faker->firstName,
            Model::FIELD_MID_NAME   => $this->faker->lastName,
            Model::FIELD_LAST_NAME  => $this->faker->lastName,
            Model::FIELD_EMAIL      => $this->faker->unique()->email,
            Model::FIELD_PHONE      => $this->faker->phoneNumber,
            Model::FIELD_GENDER     => $gender,
            Model::FIELD_BIRTH_DATE => $this->faker->dateTimeBetween('-50 years', '-18 years'),
        ];
    }
}
