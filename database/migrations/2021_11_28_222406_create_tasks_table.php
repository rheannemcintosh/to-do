<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task');
            $table->text('description')->nullable();
            $table->boolean('editing_flag')->default(true);
            $table->boolean('epic_flag')->default(false);
            $table->boolean('large_task_flag')->default(false);
            $table->boolean('cancelled_flag')->default(false);
            $table->integer('priority')->nullable();
            $table->string('category')->nullable();
            $table->string('sub_category')->nullable();
            $table->string('sub_sub_category')->nullable();
            $table->timestamp('due_date')->nullable();
            $table->timestamp('started')->nullable();
            $table->timestamp('completed') ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
