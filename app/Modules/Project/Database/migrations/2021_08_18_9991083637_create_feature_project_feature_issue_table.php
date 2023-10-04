<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeatureProjectFeatureIssueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_project_feature_issue', function (Blueprint $table) {
            $table->unsignedInteger('feature_project_id');
            $table->unsignedInteger('feature_issue_id');
            $table->string('description')->nullable();

            $table->foreign('feature_project_id')
                ->on('feature_project')
                ->references('id');

            $table->foreign('feature_issue_id')
                ->on('feature_issues')
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
