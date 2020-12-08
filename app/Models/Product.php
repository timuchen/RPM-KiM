<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'manufacturer_id', 'brand_id',
    ];

    public function pricces()
    {
        return $this->hasMany(Price::class);
    }

    public function manufacturer()
    {
      return $this->belongsTo(Manufacturer::class);
    }

    public function brand()
    {
      return $this->belongsTo(Brand::class);
    }

}
