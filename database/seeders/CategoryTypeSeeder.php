<?php

namespace Database\Seeders;

use App\Models\CategoryType;
use Illuminate\Database\Seeder;

class CategoryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories_types')->delete();

        CategoryType::create([
            'name' => 'Category'
        ]);

        CategoryType::create([
            'name' => 'Sub Category'
        ]);

        CategoryType::create([
            'name' => 'Sub Sub Category'
        ]);
    }
}
