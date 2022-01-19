<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tasks')->delete();

        Task::create([
            'id' => 1,
            'task' => 'Example Task',
            'description' => 'Example Description',
            'epic_id' => 1,
            'complete' => false,
            'priority' => 1,
            'category_id' => 1,
            'sub_category_id' => 2,
        ]);
    }
}
