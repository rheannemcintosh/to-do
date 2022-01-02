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
            $table->foreignId('epic_id')->nullable()->constrained();
            $table->boolean('complete')->default(false);
            $table->integer('priority')->nullable();
            $table->foreignId('category_id')->nullable()->constrained();
            $table->foreignId('sub_category_id')->nullable()->constrained('categories');
            $table->timestamp('due_date')->nullable();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('completed_at') ->nullable();
            $table->boolean('never_ending_flag')->default(false);
            $table->boolean('cancelled_flag')->default(false);
            $table->boolean('example')->default(false);
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
