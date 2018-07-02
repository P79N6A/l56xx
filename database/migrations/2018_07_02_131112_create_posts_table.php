<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();//将文章标题转化为URL的一部分，以利于SEO
            $table->string('title');//文章标题
            $table->text('content');//文章内容
            $table->integer('published_at',false,true)->default(0);//文章正式发布时间
            $table->integer('created_at',false,true)->default(unix_timestamp());
            $table->integer('updated_at',false,true)->default(0);

//            $this->timestamp('updated_at', $precision)->nullable();
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}