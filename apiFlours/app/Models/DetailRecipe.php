<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailRecipe extends Model {
    use HasFactory;

    protected $fillable = [
        'product_id',
        'suplies_id',
        'type_id',
        'amount',
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
    public function suplies() {
        return $this->belongsTo(Suplies::class);
    }
    public function type() {
        return $this->belongsTo(Type::class);
    }
}
