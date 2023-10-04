<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeDiagnosticReportImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_diagnostic_report_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->text('description')->nullable();
            $table->foreign('home_diagnostic_report_id')
                ->on('home_diagnostic_reports')
                ->references('id');
            $table->unsignedInteger('home_diagnostic_report_id');
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
