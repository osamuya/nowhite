<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNwUserBookmarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nw_user_bookmarks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bmUsersId')->nullable();
            $table->string('bmImage',512)->nullable();
            $table->longText('bmImageThubnail')->nullable();
            $table->string('bmTitle',256)->nullable();
            $table->string('bmMeta',256)->nullable();
            $table->string('bmLink',512)->nullable();
            $table->string('bmRss')->nullable();
            $table->longText('bmDescription')->nullable();
            $table->integer('bmCount')->nullable();
            $table->longText('bmRelations')->nullable();
            $table->longText('bmRecommend')->nullable();
            $table->longText('bmRemark')->nullable();
            $table->integer('bmStatus')->nullable();
            $table->unsignedTinyInteger('bmDelflag')->nullable();
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
        Schema::dropIfExists('nw_user_bookmarks');
    }
}
