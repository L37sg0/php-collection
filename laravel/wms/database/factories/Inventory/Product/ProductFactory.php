<?php

namespace Database\Factories\Inventory\Product;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Inventory\Product\Product as Model;

class ProductFactory extends Factory
{
    protected $model = Model::class;

    /**
     * @return array|mixed[]
     */
    public function definition()
    {
        return [
            Model::FIELD_TITLE      => fake()->sentence(3),
            Model::FIELD_SUMMARY    => fake()->sentence(5),
            Model::FIELD_TYPE       => rand(1,3),
            Model::FIELD_CONTENT    => fake()->sentence(6),
        ];
    }
}
