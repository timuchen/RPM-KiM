<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopMonitoring extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'shop_id',
        'user_id',
        'image',
    ];
    
    public function shop() 
    {
        return $this->belongsTo(Shop::class);
    }

    public function Price()
    {
        return $this->hasMany(Price::class);
    }
}
