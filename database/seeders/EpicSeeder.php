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
            'id' => 1,
            'name' => 'Example Name',
            'description' => 'Example Description',
            'complete' => false,
            'example' => true,
        ]);
    }
}
