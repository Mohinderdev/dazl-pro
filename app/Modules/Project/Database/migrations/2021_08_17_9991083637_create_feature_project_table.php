<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeatureProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_project', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('feature_id');
            $table->unsignedInteger('project_id');
            $table->boolean('immediate_need')->default(0);

            $table->foreign('project_id')
                ->on('projects')
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
