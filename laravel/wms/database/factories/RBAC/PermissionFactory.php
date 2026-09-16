<?php

namespace Database\Factories\RBAC;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RBAC\Permission as Model;
use Illuminate\Support\Str;

class PermissionFactory extends Factory
{
    protected $model = Model::class;

    /**
     * @return array|mixed[]
     */
    public function definition()
    {
        $title = Str::random(7);
        return [
            Model::FIELD_TITLE          => $title,
            Model::FIELD_SLUG           => strtolower($title),
            Model::FIELD_DESCRIPTION    => fake()->sentence,
            Model::FIELD_ACTIVE         => rand(0, 1),
            Model::FIELD_CONTENT        => fake()->sentence
        ];
    }
}
