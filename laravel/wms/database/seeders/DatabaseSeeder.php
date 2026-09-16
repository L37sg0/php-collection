<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Fulfilment\Order\Order;
use App\Models\Fulfilment\Order\OrderAddress;
use App\Models\Fulfilment\Order\OrderItem;
use App\Models\Inventory\Brand;
use App\Models\Inventory\Item;
use App\Models\Inventory\Product\Category;
use App\Models\Inventory\Product\Product;
use App\Models\Inventory\Product\ProductMeta;
use App\Models\Inventory\Supplier;
use App\Models\Inventory\Transaction;
use App\Models\RBAC\Permission;
use App\Models\RBAC\Role;
use App\Models\RBAC\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->seedRBAC();
        $this->seedInventory();
    }

    /**
     * @return void
     */
    public function seedRBAC()
    {
        User::factory(10)->create();
        Role::factory(2)->create();
        Permission::factory(10)->create();

        foreach (User::all() as $user) {
            $minRoleId = Role::first()->getAttribute(Role::FIELD_ID);
            $maxRoleId = Role::orderBy(Role::FIELD_ID, 'DESC')->first()->getAttribute(Role::FIELD_ID);
            $user->roles()->attach(rand($minRoleId, $maxRoleId));
        }

        foreach (Role::all() as $role) {
            $minPermId = Permission::first()->getAttribute(Permission::FIELD_ID);
            $maxPermId = Permission::orderBy(Permission::FIELD_ID, 'DESC')->first()->getAttribute(Permission::FIELD_ID);
            $midPermId = $maxPermId / 2;
            for ($i = 0; $i < 5; $i++) {
                $role->permissions()->attach(rand(rand($minPermId, $midPermId), $maxPermId));
            }
        }
    }

    /**
     * @return void
     */
    public function seedInventory()
    {
        $this->seedInventorySupplier();
        $this->seedInventoryBrand();
        $this->seedInventoryProduct();
        $this->seedInventoryItem();
        $this->seedInventoryOrder();
        $this->seedInventoryTransactions();

    }

    /**
     * @return void
     */
    public function seedInventorySupplier()
    {
        Supplier::factory(5)->create();
    }

    /**
     * @return void
     */
    public function seedInventoryBrand()
    {
        Brand::factory(10)->create();
    }

    /**
     * @return void
     */
    public function seedInventoryProduct()
    {
        Category::factory(5)->create();
        foreach (Category::all() as $category) {
            Category::factory(2)->create([
                Category::FIELD_PARENT_ID => $category->getAttribute(Category::FIELD_ID)
            ]);
        }

        Product::factory(100)->create();
        foreach (Product::all() as $product) {
            ProductMeta::factory(3)->create([
                ProductMeta::FIELD_PRODUCT_ID => $product->getAttribute(Product::FIELD_ID)
            ]);
        }


        $prIds = Product::all()->pluck(Product::FIELD_ID)->toArray();
        $offset = 1;
        foreach (Category::all() as $category) {
            $category->products()->attach(array_slice($prIds, $offset, 20));
            $offset += 20;
        }

    }

    /**
     * @return void
     */
    public function seedInventoryItem()
    {
        foreach (Product::all() as $product) {
            Item::factory()->create([Item::FIELD_PRODUCT_ID => $product->getAttribute(Product::FIELD_ID)]);
        }
    }

    /**
     * @return void
     */
    public function seedInventoryOrder()
    {
        Order::factory(100)->create();

        foreach (Order::all() as $order) {
            OrderAddress::factory(1)->create([
                OrderAddress::FIELD_ORDER_ID => $order->getAttribute(Order::FIELD_ID)
            ]);

            $itemIds = Item::all()->pluck(Item::FIELD_ID)->toArray();
            OrderItem::factory(rand(1,2))->create([
                OrderItem::FIELD_ITEM_ID   => $itemId = rand(min($itemIds),max($itemIds)),
                OrderItem::FIELD_ORDER_ID  => $order->getAttribute(Order::FIELD_ID),
                OrderItem::FIELD_SKU       => Item::find($itemId)->getAttribute(Item::FIELD_SKU),
                OrderItem::FIELD_PRICE     => Item::find($itemId)->getAttribute(Item::FIELD_PRICE),
                OrderItem::FIELD_DISCOUNT  => Item::find($itemId)->getAttribute(Item::FIELD_DISCOUNT),
            ]);
        }

    }

    public function seedInventoryTransactions()
    {
        foreach (Order::all() as $order) {
            Transaction::factory(rand(1,4))->create([
                Transaction::FIELD_ORDER_ID => $order->getAttribute(Order::FIELD_ID)
            ]);
        }
    }

}
