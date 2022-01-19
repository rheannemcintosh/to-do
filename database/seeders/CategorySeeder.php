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
            'id' => 1,
            'name' => 'Learning',
            'parent_id' => null,
        ]);

        Category::create([
            'id' => 2,
            'name' => 'CodeCademy',
            'parent_id' => 1,
        ]);

        Category::create([
            'id' => 3,
            'name' => 'ZTM Academy',
            'parent_id' => 1,
        ]);

        Category::create([
            'id' => 4,
            'name' => 'Treehouse',
            'parent_id' => 1,
        ]);

        Category::create([
            'id' => 5,
            'name' => 'Udemy',
            'parent_id' => 1,
        ]);

        Category::create([
            'id' => 6,
            'name' => 'Laracasts',
            'parent_id' => 1,
        ]);

        Category::create([
            'id' => 7,
            'name' => 'Duolingo',
            'parent_id' => 1,
        ]);

        Category::create([
            'id' => 8,
            'name' => 'University of Bath',
            'parent_id' => null,
        ]);

        Category::create([
            'id' => 9,
            'name' => 'Application',
            'parent_id' => 8,
        ]);

        Category::create([
            'id' => 10,
            'name' => 'Induction',
            'parent_id' => 8,
        ]);

        Category::create([
            'id' => 11,
            'name' => 'Modules',
            'parent_id' => 8,
        ]);

        Category::create([
            'id' => 12,
            'name' => 'Side Projects',
            'parent_id' => null,
        ]);

        Category::create([
            'id' => 13,
            'name' => '365 Days',
            'parent_id' => 12,
        ]);

        Category::create([
            'id' => 14,
            'name' => 'Budgeting 101',
            'parent_id' => 12,
        ]);

        Category::create([
            'id' => 15,
            'name' => 'Development Projects',
            'parent_id' => null,
        ]);

        Category::create([
            'id' => 16,
            'name' => 'To Do Application',
            'parent_id' => 15,
        ]);

        Category::create([
            'id' => 17,
            'name' => 'Rheanne McIntosh Portfolio',
            'parent_id' => 15,
        ]);

        Category::create([
            'id' => 18,
            'name' => 'Job Advert Analyser',
            'parent_id' => 15,
        ]);

        Category::create([
            'id' => 19,
            'name' => 'German Flash Cards',
            'parent_id' => 15,
        ]);

        Category::create([
            'id' => 20,
            'name' => 'Budgeting Project',
            'parent_id' => 15,
        ]);

        Category::create([
            'id' => 21,
            'name' => 'Money',
            'parent_id' => null,
        ]);

        Category::create([
            'id' => 22,
            'name' => 'Budget',
            'parent_id' => 21,
        ]);

        Category::create([
            'id' => 23,
            'name' => 'Credit Score',
            'parent_id' => 21,
        ]);

        Category::create([
            'id' => 24,
            'name' => 'Banking',
            'parent_id' => 21,
        ]);

        Category::create([
            'id' => 25,
            'name' => 'Work',
            'parent_id' => null,
        ]);

        Category::create([
            'id' => 26,
            'name' => 'Occasions',
            'parent_id' => null,
        ]);

        Category::create([
            'id' => 27,
            'name' => 'Holidays',
            'parent_id' => null,
        ]);

        Category::create([
            'id' => 28,
            'name' => 'Health',
            'parent_id' => null,
        ]);

        Category::create([
            'id' => 29,
            'name' => 'Migraine',
            'parent_id' => 28,
        ]);

        Category::create([
            'id' => 30,
            'name' => 'Heart',
            'parent_id' => 28,
        ]);

        Category::create([
            'id' => 31,
            'name' => 'Organisation',
            'parent_id' => null,
        ]);

        Category::create([
            'id' => 32,
            'name' => 'Bullet Journal',
            'parent_id' => 31,
        ]);

        Category::create([
            'id' => 33,
            'name' => 'Notion',
            'parent_id' => 31,
        ]);

        Category::create([
            'id' => 34,
            'name' => 'Home',
            'parent_id' => null,
        ]);

        Category::create([
            'id' => 35,
            'name' => 'Moving Flat',
            'parent_id' => 34,
        ]);

        Category::create([
            'id' => 36,
            'name' => 'Deep Clean',
            'parent_id' => 34,
        ]);

        Category::create([
            'id' => 37,
            'name' => 'Organisation',
            'parent_id' => 34,
        ]);

        Category::create([
            'id' => 38,
            'name' => 'Warranties',
            'parent_id' => 34,
        ]);

        Category::create([
            'id' => 39,
            'name' => 'Decorating',
            'parent_id' => 34,
        ]);

        Category::create([
            'id' => 40,
            'name' => 'Social',
            'parent_id' => null,
        ]);
    }
}
