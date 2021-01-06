<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductTag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        Product::factory()->times(50)->create();

        Tag::factory()->times(20)->create();

        ProductTag::factory()->times(100)->create();

    }
}
