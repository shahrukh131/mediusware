<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    protected $table = 'product_variants';
    protected $fillable = ['variant','product_id','variant_id'];

    public function product(){
        return $this->belongsTo(Product::class);
    }



}
