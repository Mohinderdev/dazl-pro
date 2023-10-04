<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeatureHomeDiagnosticReportFeatureOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_home_diagnostic_report_feature_options', function (Blueprint $table) {
            $table->unsignedInteger('feature_home_diagnostic_report_id');
            $table->unsignedInteger('feature_option_id');

            $table->foreign('feature_home_diagnostic_report_id','feature_home_diagnostic_report_id')
                ->on('feature_home_diagnostic_report')
                ->references('id');

            $table->foreign('feature_option_id','feature_option_id')
                ->on('feature_options')
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
        Schema::dropIfExists('feature_home_diagnostic_report_feature_options');
    }
}
