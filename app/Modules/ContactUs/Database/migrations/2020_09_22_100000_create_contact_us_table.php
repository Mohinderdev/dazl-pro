<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->increments('id');

            $table->string('member_name')->nullable();
            $table->string('property_address')->nullable();
            $table->string('company_name')->nullable();
            $table->string('contact_name')->nullable();
            $table->text('issue_description')->nullable();
            $table->text('steps_resolve_issue')->nullable();
            $table->text('issue_solution')->nullable();

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
//        Schema::dropIfExists('contact_us');
    }
}
