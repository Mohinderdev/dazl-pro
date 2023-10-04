<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsActiveToCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('cities', 'is_active')) {
            Schema::table('cities', function (Blueprint $table) {
                $table->boolean('is_active')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('cities', 'is_active')) {
            Schema::table('cities', function (Blueprint $table) {
                $table->dropColumn('is_active');
            });
        }
    }
}
