<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    use HasFactory;

    protected $fillable = [
        'total',
        'time',
        'date',
        'user_id',
    ];

    // public $table="buys";
    // protected $fillable =array("*");
    
    // public function buys

}
