<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateEpicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('epics', function (Blueprint $table) {
            $table->text('description')->nullable()->after('name');
            $table->boolean('example')->default(false)->after('description');
            $table->date('started_at')->nullable()->after('example');
            $table->date('completed_at')->nullable()->after('started_at');
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
            $table->dropColumn('example');
            $table->dropColumn('started_at');
            $table->dropColumn('completed_at');
        });
    }
}
