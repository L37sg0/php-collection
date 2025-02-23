<?php

namespace L37sg0\Catalog\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Throwable;

class UnInstall extends Command
{
    protected $signature = 'module:l37sg0_catalog:uninstall';
    protected $description = 'UnInstall module';

    public function handle()
    {
        try {
            $bar = $this->output->createProgressBar(12);
            $bar->start();
            Schema::disableForeignKeyConstraints();
            Schema::dropIfExists('catalog_images');
            $bar->advance();
            Schema::dropIfExists('catalog_categories');
            $bar->advance();
            Schema::dropIfExists('catalog_products');
            $bar->advance();
            Schema::dropIfExists('catalog_category_product');
            $bar->advance();
            Schema::dropIfExists('catalog_product_prices');
            $bar->advance();
            Schema::dropIfExists('catalog_product_images');
            $bar->advance();
            Schema::dropIfExists('catalog_attributes');
            $bar->advance();
            Schema::dropIfExists('catalog_product_attribute_int');
            $bar->advance();
            Schema::dropIfExists('catalog_product_attribute_decimal');
            $bar->advance();
            Schema::dropIfExists('catalog_product_attribute_text');
            $bar->advance();
            Schema::dropIfExists('catalog_product_attribute_bool');
            $bar->advance();
            Schema::dropIfExists('catalog_category_attributes');
            $bar->advance();
            Schema::enableForeignKeyConstraints();
            $bar->finish();
            return Command::SUCCESS;
        } catch (Throwable $exception) {
            $this->error($exception->getMessage());
            return Command::FAILURE;
        }
    }
}
