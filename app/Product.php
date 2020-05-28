<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'productName',
        'productModel',
        'productBrand_id',
        'productPrice',
        'productSalePrice',
        'prodSpecification',
        'prodManufacturer',
        'productDescription',
        'prodcolor',
        'images',
        'category_id',
        'seller_id',
    ];

    protected $cast = [
        'images' => 'array'
    ];

      public function seller()
    {
        return $this->belongsTo('App\seller');
    }
}
