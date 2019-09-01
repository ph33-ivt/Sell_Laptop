<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsImages extends Model
{
    protected $fillable = [
         'image','product_id'
    ];

    public function productimage()
    {
        $this->belongsTo('App\Product');
    }
}
