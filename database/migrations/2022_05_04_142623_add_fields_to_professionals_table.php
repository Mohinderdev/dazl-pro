<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('professionals', function (Blueprint $table) {
            $table->string('business_licence')->nullable();
            $table->string('insurance_licence')->nullable();
            $table->string('project_portfolio')->nullable();
            $table->string('references')->nullable();
            $table->string('website')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('professionals', function (Blueprint $table) {
            $table->dropColumn('business_licence');
            $table->dropColumn('insurance_licence');
            $table->dropColumn('project_portfolio');
            $table->dropColumn('references');
            $table->dropColumn('website');
        });
    }
}
