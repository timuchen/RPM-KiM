<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description',
    ];
    public function brands()
    {
        return $this->hasMany(Brand::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function pricces()
    {
        return $this->hasMany(Price::class);
    }

}
