<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectToTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_to_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('room_id');
            $table->foreign('room_id')
                ->on('rooms')
                ->references('id');
            $table->unsignedInteger('project_id');
            $table->foreign('project_id')
                ->on('projects')
                ->references('id');
            $table->unsignedInteger('sub_type_id')->nullable();
            $table->foreign('sub_type_id')
                ->on('feature_options')
                ->references('id');
            $table->unsignedInteger('type_id');
            $table->foreign('type_id')
                ->on('features')
                ->references('id');
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
        Schema::dropIfExists('project_to_types');
    }
}
