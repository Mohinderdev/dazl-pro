<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeDiagnosticReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_diagnostic_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('house_id')->on('houses')->references('id');
            $table->unsignedInteger('house_id');
            $table->integer('highest_price');
            $table->integer('lowest_price');
            $table->integer('score');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('home_diagnostic_reports');
    }
}
