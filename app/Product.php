<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    protected $fillable = [
        'name', 'category_id', 'password','image','description','price','color','cpu','weight','hdd','os','card','quantity'
    ];

    public function category()
    {
      return  $this->belongsTo('App\Category');
    }

    public function images()
    {
       return  $this->hasMany('App\ProductImages');
    }
}
