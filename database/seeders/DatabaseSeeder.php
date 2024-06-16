<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        \App\MOdels\User::factory(10)->create();

        Category::create([
            'name'=>'frontend',
            'slug'=>'frontend'
        ]);
    }
}
