<?php

namespace Database\Seeders;

use App\Models\Colour;
use Illuminate\Database\Seeder;

class ColourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('colours')->delete();

        Colour::create([
            'colour' => 'pink',
            'background' => 'bg-pink-100',
            'hover' => 'hover:bg-pink-200',
            'text' => 'text-pink-600',
        ]);

        Colour::create([
            'colour' => 'purple',
            'background' => 'bg-purple-100',
            'hover' => 'hover:bg-purple-200',
            'text' => 'text-purple-600',
        ]);

        Colour::create([
            'colour' => 'blue',
            'background' => 'bg-blue-100',
            'hover' => 'hover:bg-blue-200',
            'text' => 'text-blue-600',
        ]);

        Colour::create([
            'colour' => 'lime',
            'background' => 'bg-lime-100',
            'hover' => 'hover:bg-lime-200',
            'text' => 'text-lime-600',
        ]);

        Colour::create([
            'colour' => 'teal',
            'background' => 'bg-teal-100',
            'hover' => 'hover:bg-teal-200',
            'text' => 'text-teal-600',
        ]);

        Colour::create([
            'colour' => 'fuchsia',
            'background' => 'bg-fuchsia-100',
            'hover' => 'hover:bg-fuchsia-200',
            'text' => 'text-fuchsia-600',
        ]);
    }
}