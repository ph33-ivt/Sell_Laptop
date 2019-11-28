<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'product_name', 'product_id','price','color','cpu','weight','hdd','os','card','quantity','ram','user_email','session_id'
    ];
}
