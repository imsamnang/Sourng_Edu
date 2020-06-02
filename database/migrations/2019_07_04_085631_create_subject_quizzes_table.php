<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectQuizzesTable extends Migration
{

    public function up()
    {
        Schema::create('subject_quizzes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');            
            $table->string('slug');
            $table->string('subtype_id');
            $table->string('reference');
            $table->integer('max_attempts');
            $table->float('pass_percentage');
            $table->integer('question_duration');            
            $table->integer('per_q_mark')->default(1);
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('subject_quizzes');
    }
}
