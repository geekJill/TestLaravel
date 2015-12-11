<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TestArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create datatable by test_article
	Schema::create('test_article', function($table) {
	    $table->increments('article_id')->comment('文章id');
	    $table->string('article_title', 152)->comment('文章标题');
	    $table->text('article_content')->comment('文章内容');
	    $table->integer('article_uid')->comment('文章作者uid');
	    $table->string('article_author',50)->comment('文章作者名称');
	    $table->tinyInteger('article_type')->comment('文章类型');
	    $table->integer('pulish_time')->comment('文章发布时间');
	    $table->integer('last_update_time')->comment('文章最后修改时间');
	    $table->timestamp('insert_date')->comment('数据添加的时间');
	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
