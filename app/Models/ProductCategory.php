<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [
        'id',
        'created_at',
        'deleted_at'
    ];

    public function products()
    {
        return $this->hasMany(Product::class,'product_category_id','id');
    }
}
