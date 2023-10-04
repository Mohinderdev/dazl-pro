<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeatureHomeDiagnosticReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_home_diagnostic_report', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('feature_id');
            $table->unsignedInteger('home_diagnostic_report_id');

            $table->foreign('home_diagnostic_report_id')
                ->on('home_diagnostic_reports')
                ->references('id');

            $table->foreign('feature_id')
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
        Schema::dropIfExists('projects');
    }
}
