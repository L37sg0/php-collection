<?php

namespace App\Modules\Base\Database\Factories;

use App\Modules\Base\Models\User as Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Model::class;

    /**
     * @return array|mixed[]
     */
    public function definition(): array
    {
        $firstName = $this->faker->firstName;
        $lastName = $this->faker->lastName;

        return [
            Model::FIELD_NAME               => $firstName . ' ' . $lastName,
            Model::FIELD_EMAIL              => strtolower($firstName . '.' . $lastName) . rand(1, 1000) . '@example.com',
            Model::FIELD_EMAIL_VERIFIED_AT  => now(),
            Model::FIELD_PASSWORD           => Hash::make('password'),
            Model::FIELD_REMEMBER_TOKEN     => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            Model::FIELD_EMAIL_VERIFIED_AT => null,
        ]);
    }
}
