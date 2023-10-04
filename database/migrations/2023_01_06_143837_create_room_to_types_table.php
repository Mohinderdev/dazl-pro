<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomToTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_to_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('type_id');
            $table->foreign('type_id')
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
        Schema::dropIfExists('room_to_types');
    }
}
