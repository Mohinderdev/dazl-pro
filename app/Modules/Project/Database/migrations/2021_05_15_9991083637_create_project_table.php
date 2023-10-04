<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->date('start_date');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('home_diagnostic_report_id')->nullable();
            $table->unsignedInteger('service_type_id')->nullable();
            $table->unsignedInteger('room_id');
            $table->enum('status', \App\Enums\ProjectStatusEnum::getConstants())
            ->default(\App\Enums\ProjectStatusEnum::NOT_PUBLISHED);
            $table->foreign('customer_id')
                ->on('customers')
                ->references('id');

            $table->foreign('home_diagnostic_report_id')
                ->on('home_diagnostic_reports')
                ->references('id');

            $table->foreign('service_type_id')
                ->on('service_types')
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
        Schema::dropIfExists('projects');
    }
}
