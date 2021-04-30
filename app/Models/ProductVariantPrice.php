<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class ProductVariantPrice extends Model
{
    protected $table ='product_variant_prices';
    protected $fillable =['stock','price'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
