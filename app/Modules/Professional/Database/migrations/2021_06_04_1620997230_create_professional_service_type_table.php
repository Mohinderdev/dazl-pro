<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalServiceTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional_service_type', function (Blueprint $table) {
            $table->unsignedInteger('service_type_id');
            $table->foreign('service_type_id')
                ->on('service_types')
                ->references('id');
            $table->unsignedInteger('professional_id');
            $table->foreign('professional_id')
                ->on('professionals')
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
        Schema::dropIfExists('professionals');
    }
}
