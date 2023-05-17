<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
  /**
   * Run the migrations.
   */
  public function up():void{
    Schema::dropIfExists('comments');
    Schema::create('comments', function (Blueprint $table){
      $table->bigIncrements('id');
      $table->string('content');
      $table->timestamps();
      $table->bigInteger('author_id')->unsigned();
      $table->foreign('author_id')->references('id')->on('users');
      $table->bigInteger('book_id')->unsigned();
      $table->foreign('book_id')->references('id')->on('books');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down():void{
    Schema::dropIfExists('comments');
  }
};
