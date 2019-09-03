<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;
use Illuminate\Database\Eloquent\Builder;

class IndexController extends Controller
{
    public function index()
    {

           // $products = Product::where('category_id',1)->take(2)->orderBy('id','desc')->get();
           $productsApple = Product::where('category_id',1)->get();
            $topProducts =  \DB::table('products')->where('category_id','<>',1)->inRandomOrder()->limit(8)->get();
        //  $topProducts = Product::where('category_id',7)->get();
           //Product::where('category_id','<>',1)->limit(6)->pluck('name');
            return view('frontend.index',compact('productsApple','topProducts'));

    }
}
