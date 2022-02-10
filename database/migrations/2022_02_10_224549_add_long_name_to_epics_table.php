<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLongNameToEpicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('epics', function (Blueprint $table) {
            $table->renameColumn('name', 'short_name');
            $table->renameColumn('description', 'long_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('epics', function (Blueprint $table) {
            $table->renameColumn('short_name', 'name');
            $table->renameColumn('long_name', 'description');
        });
    }
}
