<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'category_id', 'password','image','description','price','color','cpu','weight','hdd','os','card','quantity'
    ];

    public function category()
    {
        $this->belongsTo('App\Category');
    }

    public function images()
    {
        $this->hasMany('App\ProductImages');
    }
}
