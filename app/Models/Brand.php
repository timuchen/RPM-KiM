<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
      'name', 'description', 'manufacturer_id',
    ];

    public function manufacturer()
    {
      return $this->belongsTo(Manufacturer::class);
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
