<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSale extends Model {
    use HasFactory;

    protected $fillable = [
        'product_id',
        'sale_id',
        'user_id',
        'amount',
        'subtotal',
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
    public function sale() {
        return $this->belongsTo(Sale::class);
    }
    public function user() {
      return $this->belongsTo(User::class);
    }
}
