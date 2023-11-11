<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailRecipe extends Model {
    use HasFactory;

    protected $fillable = [
        'product_id',
        'suplies_id',
        'user_id',
        'amount',
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
    public function suplies() {
        return $this->belongsTo(Suplies::class);
    }
    public function user() {
      return $this->belongsTo(User::class);
    }
}
