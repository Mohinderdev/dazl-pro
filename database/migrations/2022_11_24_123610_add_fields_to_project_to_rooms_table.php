<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToProjectToRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('project_to_rooms', function (Blueprint $table) {

            $table->unsignedInteger('flooring_types_id')->nullable();
            $table->foreign('flooring_types_id')
                ->on('flooring_types')
                ->references('id');
            $table->unsignedInteger('counter_top_types_id')->nullable();
            $table->foreign('counter_top_types_id')
                ->on('counter_top_types')
                ->references('id');
            $table->string('value1')->nullable();
            $table->string('value2')->nullable();
            $table->string('value3')->nullable();
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
