<?php

namespace Database\Factories\Fulfilment\Order;

use App\Models\Fulfilment\Order\OrderItem as Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    protected $model = Model::class;

    /**
     * @return array|mixed[]
     */
    public function definition()
    {
        return [
//            Model::FIELD_ITEM_ID    => '',    // Will be filled from Item model on seed
//            Model::FIELD_ORDER_ID   => '',    // Will be filled from Order model on seed
//            Model::FIELD_SKU        => '',    // Will be filled from Item model on seed
//            Model::FIELD_PRICE      => '',    // Will be filled from Item model on seed
//            Model::FIELD_DISCOUNT   => '',    // Will be filled from Item model on seed
            Model::FIELD_QUANTITY   => rand(1,5),
            Model::FIELD_CONTENT    => fake()->sentence,
        ];
    }
}
