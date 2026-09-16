<?php

namespace Database\Factories\RBAC;

use App\Models\RBAC\User as Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RBAC\User>
 */
class UserFactory extends Factory
{
    protected $model = Model::class;

    /**
     * @return array|mixed[]
     */
    public function definition(): array
    {
        $firstName  = fake()->firstName;
        $midName    = fake()->lastName;
        $lastname   = fake()->lastName;
        $domain = fake()->freeEmailDomain;
        return [
//            'name' => fake()->name(),
//            'email' => fake()->unique()->safeEmail(),
//            'email_verified_at' => now(),
//            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//            'remember_token' => Str::random(10),
            Model::FIELD_FIRST_NAME        => $firstName,
            Model::FIELD_MIDDLE_NAME       => $midName,
            Model::FIELD_LAST_NAME         => $lastname,
            Model::FIELD_USERNAME          => fake()->userName,
            Model::FIELD_MOBILE            => str_replace(' ', '', fake()->phoneNumber),
            Model::FIELD_EMAIL             => $firstName . '.' . $lastname . '@' . $domain,
            Model::FIELD_PASSWORD          => Hash::make('password'),
            Model::FIELD_REMEMBER_TOKEN    => Str::random(10),
//            Model::FIELD_REGISTERED_AT     => '',
//            Model::FIELD_EMAIL_VERIFIED_AT => '',
//            Model::FIELD_LAST_LOGIN        => '',
            Model::FIELD_INTRO             => '',
            Model::FIELD_PROFILE           => '',
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
