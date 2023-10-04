<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldToFeatureProjectFeatureIssueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('feature_project_feature_issue', function (Blueprint $table) {
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
        Schema::table('feature_project_feature_issue', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('feature_description');
        });
    }
}
