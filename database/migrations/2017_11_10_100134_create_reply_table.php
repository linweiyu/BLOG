<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('replies', function (Blueprint $table) {
            //
            Schema::create('replies', function (Blueprint $table) {
                $table->increments('id');
                $table->timestamps();
                $table->string('content');
                $table->integer('article_id')->unsigned()->index();
                $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
                $table->string('email');
                $table->string('name');
                $table->boolean('issecond');
                $table->timestamp('published_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            });
            Schema::create('reply_reply',function(Blueprint $table){
                $table->increments('id');
                $table->timestamps();
                // 回复的id
                $table->integer('reply_id')->unsigned()->index();
                $table->foreign('reply_id')->references('id')->on('replies')->onDelete('cascade');
                //被评论的 comment id
                $table->integer('comment_id')->unsigned()->index();
                $table->foreign('comment_id')->references('id')->on('replies')->onDelete('cascade');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('replies', function (Blueprint $table) {
            //
            Schema::drop('reply_reply');
            Schema::drop('replies');
        });
    }
}
