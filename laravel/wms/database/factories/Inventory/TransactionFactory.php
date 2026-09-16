<?php

namespace Database\Factories\Inventory;

use App\Models\Inventory\TransactionCode;
use App\Models\Inventory\TransactionMode;
use App\Models\Inventory\TransactionStatus;
use App\Models\Inventory\TransactionType;
use App\Models\RBAC\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Inventory\Transaction as Model;

class TransactionFactory extends Factory
{
    protected $model = Model::class;

    /**
     * @return array|mixed[]
     */
    public function definition()
    {
        $userIds = User::all()->pluck(User::FIELD_ID)->toArray();
        $trCodesArray = array_column(TransactionCode::cases(), 'value');
        $trCode     = $trCodesArray[array_rand($trCodesArray)];
        $trType     = rand(
            min(array_column(TransactionType::cases(), 'value')),
            max(array_column(TransactionType::cases(), 'value'))
        );
        $trMode     = rand(
            min(array_column(TransactionMode::cases(), 'value')),
            max(array_column(TransactionMode::cases(), 'value'))
        );;
        $trStatus   = rand(
            min(array_column(TransactionStatus::cases(), 'value')),
            max(array_column(TransactionStatus::cases(), 'value'))
        );;

        return [
            Model::FIELD_USER_ID    => rand(min($userIds),max($userIds)),
//            Model::FIELD_ORDER_ID   => '',    // Will be filled from Order model on seed
            Model::FIELD_CODE       => $trCode,
            Model::FIELD_TYPE       => $trType,
            Model::FIELD_MODE       => $trMode,
            Model::FIELD_STATUS     => $trStatus,
            Model::FIELD_CONTENT    => fake()->sentence,
        ];
    }
}
