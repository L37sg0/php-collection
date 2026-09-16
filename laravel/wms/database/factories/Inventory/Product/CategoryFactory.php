<?php

namespace Database\Factories\Inventory\Product;

use App\Models\Inventory\Product\Category as Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Model::class;

    /**
     * @return array|mixed[]
     */
    public function definition()
    {
        $title = fake()->word;
        return [
            Model::FIELD_PARENT_ID  => null,
            Model::FIELD_TITLE      => $title,
            Model::FIELD_META_TITLE => $title . ' ' . fake()->word,
            Model::FIELD_SLUG       => strtolower($title),
            Model::FIELD_CONTENT    => fake()->sentence,
        ];
    }
}
