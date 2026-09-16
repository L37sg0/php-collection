<?php

namespace Database\Factories\RBAC;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RBAC\Role as Model;
use Illuminate\Support\Str;

class RoleFactory extends Factory
{
    protected $model = Model::class;

    /**
     * @return array|mixed[]
     */
    public function definition()
    {
        $title = Str::random(5);
        return [
            Model::FIELD_TITLE          => $title,
            Model::FIELD_SLUG           => strtolower($title),
            Model::FIELD_DESCRIPTION    => fake()->sentence,
            Model::FIELD_ACTIVE         => rand(0,1),
            Model::FIELD_CONTENT        => fake()->sentence
        ];
    }
}
