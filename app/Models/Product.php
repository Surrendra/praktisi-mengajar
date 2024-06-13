<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductCategory;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'deleted_at'
    ];

    protected $appends = [
        'readable_purchase_price',
        'readable_selling_price'
    ];

    public function getReadablePurchasePriceAttribute()
    {
        return 'Rp. '.number_format($this->purchase_price, 0, ',', '.');
    }

    public function getReadableSellingPriceAttribute()
    {
        return 'Rp. '.number_format($this->selling_price, 0, ',', '.');
    }

    public function productCategory()
    {
        return $this->hasOne(ProductCategory::class,'id','product_category_id');
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
        // $this->attributes['description'] = Str::upper($value);
    }

    // public function getPurchasePriceAttribute($value)
    // {
    //     return 'Rp. '.number_format($value, 0, ',', '.');
    // }

    // public function getSellingPriceAttribute($value)
    // {
    //     return 'Rp. '.number_format($value, 0, ',', '.');
    // }
}
