<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('posts', function(Blueprint $table) {
         $table->increments('id')->unique();
         $table->text('title')->nullable();
         $table->text('content')->nullable();
         $table->timestamp('created_at')->nullable();
         $table->timestamp('updated_at')->nullable();
       });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
       Schema::drop('posts');
     }
 }
