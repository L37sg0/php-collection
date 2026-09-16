<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Modules\Base\Database\DatabaseSeeder as BaseDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        (new BaseDatabaseSeeder())->run();
    }
}
