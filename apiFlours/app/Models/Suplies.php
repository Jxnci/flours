<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplies extends Model {
  use HasFactory;
  protected $fillable = [
    'name',
    'stock',
    'price',
    'unit_id',
    'type_id',
    'user_id'
  ];

  public function unit() {
    return $this->belongsTo(Unit::class);
  }
  public function type() {
    return $this->belongsTo(Type::class);
}
  public function user() {
    return $this->belongsTo(User::class);
  }
}
