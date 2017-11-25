<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNwUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nw_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128)->nullable();
            $table->string('password', 256)->nullable();
            $table->string('email')->nullable();
            $table->string('uniqeid', 64)->nullable();
            $table->string('uniqehash', 64)->nullable();
            $table->rememberToken()->nullable();
            $table->longText('description')->nullable();
            $table->integer('role')->nullable();
            $table->integer('status')->nullable();
            $table->unsignedTinyInteger('delflag')->nullable();
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
        Schema::dropIfExists('nw_users');
    }
}
