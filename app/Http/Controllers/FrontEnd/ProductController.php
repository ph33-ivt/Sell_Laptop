<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductsImagesController;
use App\Category;
use App\Product;
use App\ProductsImages;
use Auth;
use App\Cart;
use App\Order;
use Illuminate\Support\Facades\Session;
use DB;
use Symfony\Component\CssSelector\Parser\Shortcut\ElementParser;
use App\OrderDetail;
use App\Mail\OrderShipped;
use App\Http\Requests\FrontEnd\PlaceOrderRequest;

class ProductController extends Controller
{


    public function details($id)
    {
        $categories = Category::all();
        $productDetails = Product::find($id);
        $productDetailsImage = ProductsImages::where('product_id',$id)->pluck('image')->first();
        $productDetailsImageall = ProductsImages::where('product_id',$id)->pluck('image');
        return view('frontend.layoutsproduct.details',compact('productDetails','productDetailsImage','productDetailsImageall','categories'));
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
        $categories = Category::all();
        if(Auth::check()){
            $user_email = Auth::user()->email;
            $session_id = Session::get('session_id');
             \DB::table('carts')->where('session_id',$session_id)->update(['user_email' => $user_email]);
             $userCarts = DB::table('carts')->where(['user_email'=> $user_email])->get();
        }else{
            //get session id
            $session_id = Session::get('session_id');
            //show user card no login
            $userCarts = Cart::where('session_id',$session_id)->get();
            }
          //take image in thumnail in show cart
          foreach ($userCarts as $key => $product) {
              //dd($product->product_id);
              $productDetailsImage = Product::where('id',$product->product_id)->pluck('image')->first();
              $userCarts[$key]->image  = $productDetailsImage;
          }
          //$productDetailsImage = ProductsImages::where('product_id',$id)->pluck('image')->first();
        return view('frontend.layoutsproduct.cart',compact('userCarts','categories'));
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
        $categories = Category::all();
        $user_id = Auth::user()->id;
        $user_email = Auth::user()->email;

        //update cart table with user_email
        $session_id = Session::get('session_id');
        \DB::table('carts')->where('session_id',$session_id)->update(['user_email' => $user_email]);

        //get cart table of user login
        $userCarts = DB::table('carts')->where(['user_email' => $user_email])->get();
        return view('frontend.layoutsproduct.checkout',compact('user_email','user_id','userCarts','categories'));
    }

    public function placeorder(PlaceOrderRequest $request)
    {

        $user_id = Auth::user()->id;
        $user_email = Auth::user()->email;
        //$order_id = \DB::table('orders')->where('user_id',$user_id)->first();
        $data = $request->only('country','firstname','lastname','company','address','city','state','zip','phone','payment_method','grand_total');
        $data['user_id'] = $user_id;
        $data['user_email'] = $user_email;
        $data['status'] ='';
        //Insert order in order table
        Order::create($data);
        //Get order_id in table order then insert table order_details
        $order_id =  DB::getPdo()->lastInsertId();
        $discount = 0;
        $userCarts = DB::table('carts')->where(['user_email' => $user_email])->get();
        foreach($userCarts as $product) {
            OrderDetail::create([
                'order_id' => $order_id,
                'product_id' => $product->product_id,
                'product_name' => $product->product_name,
                'price' => $product->price,
                'quantity' => $product->quantity,
                'discount' => $discount,
            ]);
        }
        //show message for user is order sussecss
        Session::put('order_id',$order_id);
        Session::put('grand_total',$data['grand_total']);
        if($data['payment_method'] == 'COD')
        {
            $email = $user_email;
            $messageData = [
                'email' => $email,
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'company' => $data['company'],
                'address' => $data['address'],
                'city' => $data['city'],
                'state' => $data['state'],
                'zip' => $data['zip'],
                'phone' => $data['phone'],
                'grand_total' => $data['grand_total'],
                'payment_method' => $data['payment_method'],
            ];

            $order = Order::with('orderdetails')->find($order_id);
            //dd($orderDetails);
           // \Mail::to($email)->send(new OrderShipped($messageData['email'],$messageData['firstname'],$messageData['lastname'],$messageData['company'],$messageData['address'],$messageData['city'],$messageData['state'],$messageData['zip'],$messageData['phone'],$messageData['grand_total'],$messageData['payment_method']));
           \Mail::to($email)->send(new OrderShipped($order));
            return redirect()->route('user.thanks');
        }
    }
    public function thanks()
    {
        $categories = Category::all();
        $user_email = Auth::user()->email;
        //delete  userCarts in Cart table
        $userCarts = DB::table('carts')->where(['user_email' => $user_email])->delete();
        return view('frontend.layoutsproduct.thanks','categories');
    }
}
