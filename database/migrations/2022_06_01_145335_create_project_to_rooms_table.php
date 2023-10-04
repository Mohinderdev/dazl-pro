<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectToRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_to_rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('room_id');
            $table->foreign('room_id')
                ->on('rooms')
                ->references('id');
            $table->unsignedInteger('project_id');
            $table->foreign('project_id')
                ->on('projects')
                ->references('id');
            $table->unsignedInteger('feature_option_id')->nullable();
            $table->foreign('feature_option_id')
                ->on('feature_options')
                ->references('id');
            $table->unsignedInteger('feature_id');
            $table->foreign('feature_id')
                ->on('features')
                ->references('id');
            $table->unsignedInteger('feature_issue_id');
            $table->foreign('feature_issue_id')
                ->on('feature_issues')
                ->references('id');
            $table->timestamps();
            $table->string('imageDesc');
            $table->longText('images');
            $table->string('inspectionNotes');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_to_rooms');
    }
}
