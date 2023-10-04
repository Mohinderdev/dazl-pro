<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('bathrooms');
            $table->string('street_no');
            $table->string('street_name');
            $table->string('state');
            $table->string('zip_code');
            $table->integer('bedrooms');
            $table->string('basement');
            $table->string('year_built');
            $table->string('gross_size');
            $table->string('spaces');
            $table->string('parking_features');
            $table->string('property_stories');
            $table->string('structure_type');
            $table->string('lot_size');
            $table->string('location');
            $table->string('foundation_type');
            $table->string('tax_accessed_value');
            $table->string('annual_tax_amount');
            $table->string('sale_date');
            $table->string('sale_amount');
            $table->string('type');
            $table->unsignedInteger('realtor_id');
            $table->unsignedInteger('customer_id');
            $table->foreign('customer_id')
                ->on('customers')
                ->references('id');

            $table->foreign('realtor_id')
                ->on('realtors')
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
        Schema::dropIfExists('houses');
    }
}
