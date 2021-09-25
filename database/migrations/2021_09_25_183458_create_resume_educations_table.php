<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_educations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resume_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('institution');
            $table->string('location')->nullable();
            $table->text('description')->nullable();
            $table->string('major');
            $table->string('degree');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->boolean('current_attend')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resume_educations');
    }
}
