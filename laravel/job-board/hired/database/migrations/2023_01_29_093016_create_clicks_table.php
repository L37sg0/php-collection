<?php

use App\Models\Globals;
use App\Models\JobBoard\Gig\Gig;
use App\Models\JobBoard\Listing;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\JobBoard\Click as Model;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Model::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->foreignId(Model::FIELD_LISTING_ID)
                ->nullable()->constrained(Listing::TABLE_NAME)->onDelete(Globals::ON_DELETE_CASCADE);
            $table->foreignId(Model::FIELD_GIG_ID)
                ->nullable()->constrained(Gig::TABLE_NAME)->onDelete(Globals::ON_DELETE_CASCADE);
            $table->text(Model::FIELD_USER_AGENT)->nullable();
            $table->string(Model::FIELD_IP)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Model::TABLE_NAME);
    }
};
