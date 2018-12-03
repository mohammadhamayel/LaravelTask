<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users',function ($mytable)
        {
           $mytable->increments('id');
           $mytable->string('email')->unique();
           $mytable->string('username',100)->unique();
           $mytable->string('password',255) ;
           $mytable->string('remember_token',128);
           $mytable->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('users');
    }
}
