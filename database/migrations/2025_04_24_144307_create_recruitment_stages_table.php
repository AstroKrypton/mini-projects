<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitment_stages', function (Blueprint $table) {
            $table->id('StageId');
            $table->unsignedBigInteger('ApplicationId');
            $table->foreign('ApplicationId')->references('ApplicationId')->on('applications')->onDelete('cascade');
            $table->string('StageName');
            $table->enum('StageStatus', ['Pending', 'Completed', 'Failed'])->default('Pending');
            $table->date('CompletionDate')->nullable();
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
        Schema::dropIfExists('recruitment_stages');
    }
}
