<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBuy extends Model {
    use HasFactory;

    protected $fillable = [
        'suplies_id',
        'buy_id',
        'amount',
        'subtotal',
    ];

    public function suplies() {
        return $this->belongsTo(Suplies::class);
    }
    public function buy() {
        return $this->belongsTo(Buy::class);
    }
}
