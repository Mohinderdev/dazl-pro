<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomToFeatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_to_feature', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('feature_id');
            $table->foreign('feature_id')
                ->on('features')
                ->references('id');
            $table->unsignedInteger('room_id');
            $table->foreign('room_id')
                ->on('rooms')
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
        Schema::dropIfExists('room_to_feature');
    }
}
