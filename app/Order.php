<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id','user_email','company','country','name','city','state','zip','phone','payment_method','status','address','grand_total'
    ];

    public function orderdetails()
    {
       return $this->hasMany('App\OrderDetail','order_id');
    }
}
