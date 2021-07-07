<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JtiJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jti_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('quotation_no');
            $table->string('running_no');
            $table->string('job_task'); // job description point dalam string
            $table->longText('job_details')->nullable();  // guna quill, to provide details
            $table->string('task_status')->default('Assigned');  // Assigned | Working-On | Finished 
            $table->integer('created_by');
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
        Schema::dropIfExists('jti_jobs');
    }
}
