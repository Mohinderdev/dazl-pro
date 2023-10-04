<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldToFeatureHomeDiagnosticReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('feature_home_diagnostic_report', function (Blueprint $table) {
            $table->string('feature_issue_id')->nullable();
            $table->longText('status')->nullable();
            $table->longText('feature_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('feature_home_diagnostic_report', function (Blueprint $table) {
            $table->dropColumn('feature_issue_id');
            $table->dropColumn('status');
            $table->dropColumn('feature_description');
        });
    }
}
