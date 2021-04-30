<?php

namespace App\Models;

use App\Models\Variant;
use App\Models\ProductImage;
use App\Models\ProductVariant;
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

    public function varients(){
        return $this->belongsToMany(Variant::class);
    }

    public function productvarient(){
        return $this->hasOne(ProductVariant::class);
    }

}
