<?php

namespace Database\Seeders;

use App\Models\Rest;
use App\Models\Work;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Work::factory(30)->create();
        Rest::factory(30)->create();
    }
}
