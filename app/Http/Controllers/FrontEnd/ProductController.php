<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductsImagesController;
use App\Product;
use App\ProductsImages;
use Auth;
use App\Cart;
use Illuminate\Support\Facades\Session;
use DB;
use Symfony\Component\CssSelector\Parser\Shortcut\ElementParser;


class ProductController extends Controller
{
    public function details($id)
    {
        $productDetails = Product::find($id);
        $productDetailsImage = ProductsImages::where('product_id',$id)->pluck('image')->first();
        $productDetailsImageall = ProductsImages::where('product_id',$id)->pluck('image');
        return view('frontend.layoutsproduct.details',compact('productDetails','productDetailsImage','productDetailsImageall'));
    }
    public function addcart(Request $request, $id)
    {
        $data = $request->except('_token');
        if(empty(Auth::user()->email))
        {
            $data['user_email'] = '';
        }else{
            $data['user_email'] =Auth::user()->email;
        }
            //get session old user
            $session_id = Session::get('session_id');
            if(empty($session_id))
            {
            $session_id = str_random(40);
            Session::put('session_id',$session_id);
            $data['session_id'] = $session_id;
            }
            $data['session_id'] = $session_id;

            $product = Product::find($id);

            //check if item have in table cart of user
            if(empty(Auth::check())){
            $productCount = \DB::table('carts')->where(['product_id'=>$data['product_id'],'session_id' => $data['session_id']])->count();
            }else
            $productCount = \DB::table('carts')->where(['product_id'=>$data['product_id'],'user_email' => $data['user_email']])->count();
            if($productCount>0){
                return redirect()->back()->with('error','Product exists in Cart');
            }
            elseif($request->quantity < $product->quantity)
            {
                Cart::insert($data);
            }else
            {
                return redirect()->back()->with('error','Please check quantity is more than product stock ');

            }
        return redirect()->route('user.cart')->with('success','Product has been added in Cart');
    }

    public function cart()
    {
        if(Auth::check()){
            $user_email = Auth::user()->email;
            $session_id = Session::get('session_id');
             \DB::table('carts')->where('session_id',$session_id)->update(['user_email' => $user_email]);
             $userCarts = DB::table('carts')->where(['user_email'=> $user_email])->get();
        }else{
            //lấy session id ra ngoài
            $session_id = Session::get('session_id');
            //lấy tất cả các sản phẩm mà người mua đã mua để show ra
            $userCarts = Cart::where('session_id',$session_id)->get();
            }
          //take image in thumnail in show cart
          foreach ($userCarts as $key => $product) {
              //dd($product->product_id);
              $productDetailsImage = Product::where('id',$product->product_id)->pluck('image')->first();
              $userCarts[$key]->image  = $productDetailsImage;
          }
          //$productDetailsImage = ProductsImages::where('product_id',$id)->pluck('image')->first();
        return view('frontend.layoutsproduct.cart',compact('userCarts'));

    }

    public function deletecart($id)
    {

        $table = DB::table('carts')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success','Product has been removed in Cart');
    }

    public function updatecart(Request $request,$id)
    {
        $product = Product::find($id);
        $data = $request->except('_token','_method');
        if($request->quantity < $product->quantity){
            \DB::table('carts')->where('id',$id)->update($data);
            return redirect()->route('user.cart')->with('success','Product has been update in Cart');
        }else{
            return redirect()->back()->with('error','Please check quantity is more than product stock ');
        }
    }

    public function checkout(Request $request)
    {
        $user_id = Auth::user()->id;
        $user_email = Auth::user()->email;

        //update cart table with user_email
        $session_id = Session::get('session_id');
        \DB::table('carts')->where('session_id',$session_id)->update(['user_email' => $user_email]);

        //get cart table of user login
        $userCarts = DB::table('carts')->where(['user_email' => $user_email])->get();
        return view('frontend.layoutsproduct.checkout',compact('user_email','user_id','userCarts'));
    }
}
