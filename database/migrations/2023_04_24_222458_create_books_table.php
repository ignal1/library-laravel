<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('books', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('title');
      $table->string('slug');
      $table->string('author');
      $table->text('description')->nullable()->default(null);
      $table->smallInteger('rating')->nullable()->default(null);
      $table->string('cover')->nullable()->default(null);
      $table->timestamps();
      $table->smallInteger('category_id')->unsigned();
      $table->foreign('category_id')
        ->references('id')
        ->on('categories');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('books');
  }
};
