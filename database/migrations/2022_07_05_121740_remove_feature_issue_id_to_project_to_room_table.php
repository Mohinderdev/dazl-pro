<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveFeatureIssueIdToProjectToRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('project_to_rooms', function (Blueprint $table) {
            $table->dropForeign('project_to_rooms_feature_issue_id_foreign');
            $table->dropColumn('feature_issue_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_to_rooms', function (Blueprint $table) {
            $table->string('feature_issue_id');
        });
    }
}
