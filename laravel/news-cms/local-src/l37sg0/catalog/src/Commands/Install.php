<?php

namespace L37sg0\Catalog\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Throwable;

class Install extends Command
{
    protected $signature = 'module:l37sg0_catalog:install';
    protected $description = 'Install module';

    public function handle() {
        try {
            $this->createTables();
            return Command::SUCCESS;
        } catch (Throwable $exception) {
            $this->error($exception->getMessage());
            return Command::FAILURE;
        }
    }

    private function createTables()
    {
        $bar = $this->output->createProgressBar(12);
        $bar->start();
        Schema::create('catalog_images', function (Blueprint $table) {
            $table->id();
            $table->string('image_url');
            $table->string('alt_text')->nullable();
            $table->timestamps();
        });
        $bar->advance();
        Schema::create('catalog_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->nullable()->constrained('catalog_categories')->onDelete('set null');
            $table->string('title');
            $table->string('slug');
            $table->boolean('is_active')->default(false);
            $table->timestamps();
        });
        $bar->advance();

        Schema::create('catalog_products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->boolean('in_stock')->default(false);
            $table->timestamps();
        });
        $bar->advance();

        Schema::create('catalog_category_product', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained('catalog_categories')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('catalog_products')->onDelete('cascade');
        });
        $bar->advance();

        Schema::create('catalog_product_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('catalog_products')->onDelete('cascade');
            $table->string('type')->default('base');
            $table->decimal('value', 16, 2)->default(0);
            $table->string('currency')->default('BGN');
            $table->timestamp('active_to')->nullable();
            $table->timestamps();
        });
        $bar->advance();

        Schema::create('catalog_product_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('catalog_products')->onDelete('cascade');
            $table->foreignId('image_id')->constrained('catalog_images')->onDelete('cascade');
            $table->boolean('is_primary')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
        $bar->advance();

        Schema::create('catalog_attributes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->enum('type', ['int','decimal','text','bool'])->default('text');
            $table->timestamps();
        });
        $bar->advance();

        Schema::create('catalog_product_attribute_int', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained('catalog_products')->onDelete('cascade');
            $table->foreignId('attribute_id')->constrained('catalog_attributes')->onDelete('cascade');
            $table->bigInteger('value');
            $table->unique(['product_id', 'attribute_id']);
        });
        $bar->advance();

        Schema::create('catalog_product_attribute_decimal', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained('catalog_products')->onDelete('cascade');
            $table->foreignId('attribute_id')->constrained('catalog_attributes')->onDelete('cascade');
            $table->decimal('value', 16, 2);
            $table->unique(['product_id', 'attribute_id']);
        });
        $bar->advance();

        Schema::create('catalog_product_attribute_text', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained('catalog_products')->onDelete('cascade');
            $table->foreignId('attribute_id')->constrained('catalog_attributes')->onDelete('cascade');
            $table->text('value');
            $table->unique(['product_id', 'attribute_id']);
        });
        $bar->advance();

        Schema::create('catalog_product_attribute_bool', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained('catalog_products')->onDelete('cascade');
            $table->foreignId('attribute_id')->constrained('catalog_attributes')->onDelete('cascade');
            $table->boolean('value');
            $table->unique(['product_id', 'attribute_id']);
        });
        $bar->advance();


        Schema::create('catalog_category_attributes', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained('catalog_categories')->onDelete('cascade');
            $table->foreignId('attribute_id')->constrained('catalog_attributes')->onDelete('cascade');
        });
        $bar->finish();
    }
}
