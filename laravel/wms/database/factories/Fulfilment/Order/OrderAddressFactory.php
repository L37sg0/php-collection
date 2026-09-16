<?php

namespace Database\Factories\Fulfilment\Order;

use App\Models\Fulfilment\Order\OrderAddress as Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderAddressFactory extends Factory
{
    protected $model = Model::class;

    /**
     * @return array|mixed[]
     */
    public function definition()
    {
        $firstname = fake()->firstName;
        $lastname = fake()->lastName;

        return [
//            Model::FIELD_ORDER_ID       => '',    // Will be filled from Order model on seed
            Model::FIELD_FIRST_NAME     => $firstname,
            Model::FIELD_MIDDLE_NAME    => fake()->lastName,
            Model::FIELD_LAST_NAME      => $lastname,
            Model::FIELD_MOBILE         => str_replace(' ', '', fake()->phoneNumber),
            Model::FIELD_EMAIL          => strtolower($firstname . '.' . $lastname . '@' . fake()->freeEmailDomain),
            Model::FIELD_LINE_1         => fake()->streetSuffix,
            Model::FIELD_LINE_2         => fake()->streetName,
            Model::FIELD_CITY           => fake()->city,
            Model::FIELD_PROVINCE       => fake()->city,
            Model::FIELD_COUNTRY        => fake()->countryCode,
            Model::FIELD_POSTCODE       => fake()->postcode
        ];
    }
}
