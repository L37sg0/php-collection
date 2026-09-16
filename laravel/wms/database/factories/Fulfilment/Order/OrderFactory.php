<?php

namespace Database\Factories\Fulfilment\Order;

use App\Models\Fulfilment\Order\Order as Model;
use App\Models\Fulfilment\Order\OrderStatus;
use App\Models\Fulfilment\Order\OrderType;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Model::class;

    /**
     * @return array|mixed[]
     */
    public function definition()
    {
        $promoCodes = [
            'NO-CODE'   => 0,
            'FIRST1'    => 1,
            'SUMMER5'   => 5,
            'BIG10'     => 10
        ];
        $orderType = rand(
            min(array_column(OrderType::cases(), 'value')),
            max(array_column(OrderType::cases(), 'value'))
        );
        $orderStatus = rand(
            min(array_column(OrderStatus::cases(), 'value')),
            max(array_column(OrderStatus::cases(), 'value'))
        );
        $subTotal = rand(50,500);
        $tax = $subTotal/100 * rand(10,20);
        $shipping = rand(5,25);
        $total = $subTotal + $tax + $shipping;
        $promoCode = array_rand($promoCodes);
        $discount = $total/100 * $promoCodes[$promoCode];
        $grandTotal = $total - $discount;


        return [
            Model::FIELD_TYPE           => $orderType,
            Model::FIELD_STATUS         => $orderStatus,
            Model::FIELD_SUB_TOTAL      => $subTotal,
            Model::FIELD_ITEM_DISCOUNT  => 0,
            Model::FIELD_TAX            => $tax,
            Model::FIELD_SHIPPING       => $shipping,
            Model::FIELD_TOTAL          => $total,
            Model::FIELD_PROMO          => $promoCode,
            Model::FIELD_DISCOUNT       => $discount,
            Model::FIELD_GRAND_TOTAL    => $grandTotal,
            Model::FIELD_CONTENT        => fake()->sentence,
        ];
    }
}
