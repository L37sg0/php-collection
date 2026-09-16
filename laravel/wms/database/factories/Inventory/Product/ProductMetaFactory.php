<?php

namespace Database\Factories\Inventory\Product;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Inventory\Product\ProductMeta as Model;

class ProductMetaFactory extends Factory
{
    protected $model = Model::class;

    /**
     * @return array|mixed[]
     */
    public function definition()
    {
        return [
            Model::FIELD_PRODUCT_ID => rand(1,100),
            Model::FIELD_KEY        => strtolower(fake()->text(5) . '_' . fake()->text(5) . rand(1,1000)),
            Model::FIELD_CONTENT    => fake()->sentence(6)
        ];
    }
}
