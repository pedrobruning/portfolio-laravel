<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostCommentAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_comment_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_comment_id')->constrained();
            $table->foreignId('commenter_id')->constrained('users');
            $table->foreignId('answerer_id')->constrained('users');
            $table->text('description');
            $table->integer('likes');
            $table->integer('dislikes');
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
        Schema::dropIfExists('post_comment_answers');
    }
}
