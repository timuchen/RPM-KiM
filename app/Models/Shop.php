<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'sity', 'adress',
    ];

    public function pricces()
    {
        return $this->hasMany(Price::class);
    }

    public function shopMonitorings()
    {
        return $this->hasMany(ShopMonitoring::class);
    }
}
