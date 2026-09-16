<?php

namespace Database\Factories\Inventory;

use App\Models\Inventory\Brand;
use App\Models\Inventory\Product\Product;
use App\Models\Inventory\Supplier;
use App\Models\RBAC\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Inventory\Item as Model;

class ItemFactory extends Factory
{
    protected $model = Model::class;

    /**
     * @return array|mixed[]
     */
    public function definition()
    {
        $prIds = Product::all()->pluck(Product::FIELD_ID)->toArray();
        $brIds = Brand::all()->pluck(Brand::FIELD_ID)->toArray();
        $spIds = Supplier::all()->pluck(Supplier::FIELD_ID)->toArray();
        $usrIds = User::all()->pluck(User::FIELD_ID)->toArray();

        return [
            Model::FIELD_PRODUCT_ID     => rand(min($prIds), max($prIds)),
            Model::FIELD_BRAND_ID       => rand(min($brIds), max($brIds)),
            Model::FIELD_SUPPLIER_ID    => rand(min($spIds), max($spIds)),
            Model::FIELD_SKU            => str_replace(' ', '_', strtoupper(fake()->sentence(rand(1,3)))),
            Model::FIELD_MRP            => rand(0,5),
            Model::FIELD_DISCOUNT       => fake()->randomFloat(2,0,50),
            Model::FIELD_PRICE          => fake()->randomFloat(2,0,500),
            Model::FIELD_QUANTITY       => rand(0,3),
            Model::FIELD_SOLD           => rand(0,100),
            Model::FIELD_AVAILABLE      => rand(0,100),
            Model::FIELD_DEFECTIVE      => rand(0,50),
            Model::FIELD_CREATED_BY     => rand(min($usrIds), max($usrIds)),
            Model::FIELD_UPDATED_BY     => rand(min($usrIds), max($usrIds))
        ];
    }
}
