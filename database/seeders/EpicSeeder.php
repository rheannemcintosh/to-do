<?php

namespace Database\Seeders;

use App\Models\Epic;
use Illuminate\Database\Seeder;

class EpicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('epics')->delete();

        Epic::create([
            'name' => 'Bullet Journal 2022'
        ]);

        Epic::create([
            'name' => 'Just Journal'
        ]);

        Epic::create([
            'name' => 'Rheanne McIntosh Portfolio'
        ]);

        Epic::create([
            'name' => 'Weekly Tasks'
        ]);

        Epic::create([
            'name' => 'To Do Application'
        ]);

        Epic::create([
            'name' => 'Bath University'
        ]);
    }
}
