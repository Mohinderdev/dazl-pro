<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeatureIssueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_issues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('feature_id');
            $table->foreign('feature_id')
                ->on('features')
                ->references('id');
            $table->unsignedInteger('feature_option_id');
            $table->foreign('feature_option_id')->references('id')
                ->on('feature_options')
                ->references('id');
            $table->unsignedInteger('service_type_id');
            $table->foreign('service_type_id')
                ->on('service_types')
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
        Schema::dropIfExists('feature_issues');
    }
}
