<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void {
    Schema::create('detail_recipes', function (Blueprint $table) {
      $table->id();

      $table->unsignedBigInteger("product_id");
      $table->unsignedBigInteger("suplies_id");
      $table->unsignedBigInteger('user_id');
      $table->integer("amount");
      $table->timestamps();
      
      $table->foreign('user_id')->references("id")->on("users");
      $table->foreign("product_id")->references("id")->on("products");
      $table->foreign("suplies_id")->references("id")->on("suplies");
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void {
    Schema::dropIfExists('detail_recipes');
  }
};
