<?php

namespace Database\Factories\Inventory;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Inventory\Supplier as Model;

class SupplierFactory extends Factory
{
    protected $model = Model::class;

    /**
     * @return array|mixed[]
     */
    public function definition()
    {
        return [
            Model::FIELD_NAME => fake()->company
        ];
    }
}
