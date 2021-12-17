<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->delete();

        Category::create([
            'name' => 'University'
        ]);

        Category::create([
            'name' => 'Bullet Journal'
        ]);

        Category::create([
            'name' => 'Occasions'
        ]);

        Category::create([
            'name' => 'Health'
        ]);

        Category::create([
            'name' => 'Flat'
        ]);

        Category::create([
            'name' => 'Development'
        ]);

        Category::create([
            'name' => 'Learning'
        ]);

        Category::create([
            'name' => 'Money'
        ]);

        Category::create([
            'name' => 'Organisation'
        ]);

        Category::create([
            'name' => 'Projects'
        ]);

        Category::create([
            'name' => 'Work'
        ]);
    }
}
