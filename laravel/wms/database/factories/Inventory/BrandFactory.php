<?php

namespace Database\Factories\Inventory;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Inventory\Brand as Model;

class BrandFactory extends Factory
{
    protected $model = Model::class;

    /**
     * @return array|mixed[]
     */
    public function definition()
    {
        return [
            Model::FIELD_TITLE      => ucfirst(fake()->word),
            Model::FIELD_SUMMARY    => fake()->words(3, true),
            Model::FIELD_CONTENT    => fake()->sentence,
        ];
    }
}
