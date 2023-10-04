<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnToProjectToRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('project_to_rooms', function (Blueprint $table) {
            $table->dropForeign('project_to_rooms_counter_top_types_id_foreign');
            $table->dropForeign('project_to_rooms_flooring_types_id_foreign');
            $table->dropColumn(['flooring_types_id', 'counter_top_types_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_to_rooms', function (Blueprint $table) {
            //
        });
    }
}
