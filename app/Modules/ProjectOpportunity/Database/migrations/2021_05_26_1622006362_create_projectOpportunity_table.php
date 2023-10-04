<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectOpportunityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_opportunities', function (Blueprint $table) {
            $table->increments('id');
            $table->text('message')->nullable();
            $table->boolean('isInterested')->default(0)->comment('plumber is not interested');
            $table->date('interest_date')->nullable()->comment("the date the plumber show interest");
            $table->unsignedInteger('project_id');
            $table->foreign('project_id')->on('projects')->references('id');
            $table->unsignedInteger('customer_id');
            $table->foreign('customer_id')->on('customers')->references('id');
            $table->unsignedInteger('professional_id');
            $table->foreign('professional_id')->on('professionals')->references('id');
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
        Schema::dropIfExists('project_opportunities');
    }
}
