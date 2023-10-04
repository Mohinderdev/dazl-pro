<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_room', function (Blueprint $table) {
            $table->unsignedInteger('house_id');
            $table->unsignedInteger('room_id');

            $table->foreign('house_id')
                ->on('houses')
                ->references('id');

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
        Schema::dropIfExists('houses');
    }
}
