<?php

namespace Database\Factories;

use App\Models\Enums\Degree;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Education as Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $degree = rand(
            min(array_column(Degree::cases(), 'value')),
            max(array_column(Degree::cases(), 'value'))
        );;

        return [
//            Model::FIELD_APPLICANT_ID   => ,  // Will be filled on seed
//            Model::FIELD_UNV_ID => ,  // Will be filled on seed
            Model::FIELD_DATE_FROM                  => $this->faker->dateTimeBetween('-18 years', '-2 years'),
            Model::FIELD_DATE_TO                    => $this->faker->dateTimeBetween('-2 years', '+2 years'),
            Model::FIELD_DEGREE                     => $degree,
            Model::FIELD_SPECIALTY                  => $this->faker->unique()->jobTitle,
            Model::FIELD_ACCREDITATION_ASSESSMENT   => $this->faker->randomFloat(2,3,6),
        ];
    }
}
