<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('statuses')->delete();

        Status::create([
            'status' => 'Not Started',
        ]);

        Status::create([
            'status' => 'In Progress',
        ]);

        Status::create([
            'status' => 'Completed',
        ]);

        Status::create([
            'status' => 'Cancelled',
        ]);
    }
}
