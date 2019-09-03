<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = [
        'order_id','product_id','product_name','price','quantity','discount'
    ];

    public function order()
    {
      return  $this->belongsTo('App\Order');
    }
}
