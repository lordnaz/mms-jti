<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJtiPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jti_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('running_no')->unique();
            $table->string('issued_by');
            $table->integer('assign_to');
            $table->string('company_name');
            $table->string('pic_name');
            $table->string('company_address');
            $table->string('volume');
            $table->string('mode');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->string('period');
            $table->string('job_list');
            $table->string('from_destination');
            $table->string('to_destination');
            $table->longText('job_details');
            $table->integer('manpower');
            $table->integer('trucks');
            $table->longText('material_list');
            $table->longText('equipment_list');
            $table->longText('special_instruction');
            $table->boolean('new_flag')->default(true);
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
        Schema::dropIfExists('jti_plans');
    }
}
