<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionToEpicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('epics', function (Blueprint $table) {
            $table->text('description')->nullable()->after('long_name');
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
            $table->dropColumn('description');
        });
    }
}
