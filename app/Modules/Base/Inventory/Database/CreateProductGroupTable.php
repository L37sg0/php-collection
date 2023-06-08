<?php

namespace App\Modules\Base\Inventory\Database;

use App\Modules\Base\Globals;
use App\Modules\Base\Group\Models\Group;
use App\Modules\Base\Inventory\Models\Product;
use Illuminate\Database\Migrations\Migration;
use App\Modules\Base\Inventory\Models\ProductGroup as Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductGroupTable extends Migration
{
    public function up()
    {
        Schema::create(Model::TABLE_NAME, function (Blueprint $table) {
            $table->id();

            $table->foreignId(Model::FIELD_PRODUCT_ID)
                ->constrained(Product::TABLE_NAME)
                ->onDelete(Globals::ON_DELETE_CASCADE);

            $table->foreignId(Model::FIELD_GROUP_ID)
                ->constrained(Group::TABLE_NAME)
                ->onDelete(Globals::ON_DELETE_CASCADE);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(Model::TABLE_NAME);
    }
}
