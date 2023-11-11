<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void {
    Schema::create('detail_buys', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger("suplies_id");
      $table->unsignedBigInteger("buy_id");
      $table->unsignedBigInteger('user_id');
      $table->integer("amount");
      $table->float("subtotal");
      $table->timestamps();

      $table->foreign('user_id')->references("id")->on("users");
      $table->foreign("suplies_id")->references("id")->on("suplies");
      $table->foreign("buy_id")->references("id")->on("buys");
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void {
    Schema::dropIfExists('detail_buys');
  }
};
