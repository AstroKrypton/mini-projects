<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id('ApplicationId');
            $table->unsignedBigInteger('JobId');
            $table->foreign('JobId')->references('JobId')->on('jobpositions')->onDelete('cascade');
            $table->unsignedBigInteger('ApplicantId');
            $table->foreign('ApplicantId')->references('ApplicantId')->on('applicants')->onDelete('cascade');
            $table->enum('ApplicationStatus', ['Pending', 'Accepted', 'Rejected'] )->default('Pending');
            $table->date('ReviewDate');
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
        Schema::dropIfExists('applications');
    }
}
