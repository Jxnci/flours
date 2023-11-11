<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
  use HasFactory;

  protected $fillable = [
    'name',
    'stock', #cantidad
    'price_buy', #precio de compra
    'price_sale', #precio de venta(0.00)
    'imagen', #ruta img
    'state', #estado 0/1
    'rate', #porcentaje de posible ganacia %
    'category_id',
    'user_id',
  ];

  public function category() {
    return $this->belongsTo(Category::class);
  }
  public function user() {
    return $this->belongsTo(User::class);
  }
}
