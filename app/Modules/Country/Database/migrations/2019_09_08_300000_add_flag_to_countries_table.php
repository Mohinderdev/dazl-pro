<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFlagToCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('countries', 'flag')) {
            Schema::table('countries', function (Blueprint $table) {
                $table->string('flag')->nullable();
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
        if (Schema::hasColumn('countries', 'flag')) {
            Schema::table('countries', function (Blueprint $table) {
                $table->dropColumn('flag');
            });
        }
    }
}
