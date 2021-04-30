<?php

namespace App\Models;

use App\Models\Variant;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use App\Models\ProductVariantPrice;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'sku', 'description'
    ];

    public function productimages()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function variants(){
        return $this->belongsToMany(Variant::class);
    }

    public function productvarients(){
        return $this->hasMany(ProductVariant::class);
    }

    public function productvariantprize()
    {
        return $this->hasOne(ProductVariantPrice::class);
    }

}
