<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'description', 
        'shop_id', 
        'manufacturer_id', 
        'brand_id', 
        'product_id', 
        'user_id',
    ];
    public function shop()
    {
      return $this->belongsTo(Shop::class);
    }
    public function manufacturer()
    {
      return $this->belongsTo(Manufacturer::class);
    }
    public function brand()
    {
      return $this->belongsTo(Brand::class);
    }
    public function product()
    {
      return $this->belongsTo(Product::class);
    }

}
