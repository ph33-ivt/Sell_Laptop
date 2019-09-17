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
use App\User;
use Illuminate\Support\Facades\Session;
use DB;
use Symfony\Component\CssSelector\Parser\Shortcut\ElementParser;
use App\OrderDetail;
use App\Mail\OrderShipped;
use App\Mail\Contact;
use App\Http\Requests\FrontEnd\PlaceOrderRequest;
use App\Http\Requests\FrontEnd\AddtoCartRequest;
use App\Http\Requests\FrontEnd\UpdateCartRequest;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{


    public function details($id)
    {
        $categories = Category::all();
        $productDetails = Product::find($id);
        $productDetailsImage = ProductsImages::where('product_id',$id)->pluck('image')->first();
        $productDetailsImageall = ProductsImages::where('product_id',$id)->pluck('image');
        //relate product
        $productRelates = Product::where('id','<>',$id)->where('category_id',$productDetails->category_id)->get();
        //get count product  in cart
        if(empty(\Auth::check())){
            $session_id = Session::get('session_id');
            $countProducts =  \DB::table('carts')->where('session_id',$session_id)->count();
        }else
        {
            $use_email = Auth::user()->email;
            $countProducts =  \DB::table('carts')->where('user_email',$use_email)->count();
        }
        return view('frontend.layoutsproduct.details',compact('productDetails','productDetailsImage','productDetailsImageall','categories','productRelates','countProducts'));
    }

    public function addcart(AddtoCartRequest $request, $id)
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
        }else
        {
            $data['session_id'] = $session_id;
        }
        $product = Product::find($id);
        //check if item have in table cart of user
        if(empty(Auth::check()))
        {
            $productCount = \DB::table('carts')->where(['product_id'=>$data['product_id'],'session_id' => $data['session_id']])->count();
        }
        else
            $productCount = \DB::table('carts')->where(['product_id'=>$data['product_id'],'user_email' => $data['user_email']])->count();
        // check quantity with stock quantity table
        if($productCount>0)
        {
            if(empty(Auth::check()))
                {
                    //get quantity in exists in cart
                    $quantity = \DB::table('carts')->where(['product_id'=>$data['product_id'],'session_id' => $data['session_id']])->pluck('quantity')->get(0);

                    if(($quantity+$request->quantity) > ($product->quantity))
                    {
                        return redirect()->back()->with('add_error','Please check quantity is more than product stock ');
                    }else
                    \DB::table('carts')->where(['product_id'=>$data['product_id'],'session_id' => $data['session_id']])->update(['quantity' => $data['quantity']+ $quantity]);
                    return redirect()->route('user.cart')->with('success','Product has been added in Cart');

                }
            else
                {
                $quantity = \DB::table('carts')->where(['product_id'=> $data['product_id'],'user_email' => $data['user_email']])->pluck('quantity')->get(0);
                if(($quantity+$request->quantity) > ($product->quantity))
                {
                    return redirect()->back()->with('add_error','Please check quantity is more than product stock ');
                }else
                \DB::table('carts')->where(['product_id'=>$data['product_id'],'user_email' => $data['user_email']])->update(['quantity' => $data['quantity']+ $quantity]);
                return redirect()->route('user.cart')->with('success','Product has been added in Cart');
                }
        }
            elseif( $request->quantity < $product->quantity)//if quantity add < stock ,  insert new item into table cart
            {
                Cart::insert($data);
                return redirect()->route('user.cart')->with('success','Product has been added in Cart');
            }else
            {
                return redirect()->back()->with('add_error','Please check quantity is more than product stock ');
            }

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
              $productDetailsImage = Product::where('id',$product->product_id)->pluck('image')->first();
              $userCarts[$key]->image  = $productDetailsImage;
          }
           //get count product  in cart
        if(empty(\Auth::check())){
            $session_id = Session::get('session_id');
            $countProducts =  \DB::table('carts')->where('session_id',$session_id)->count();
        }else
        {
            $use_email = Auth::user()->email;
            $countProducts =  \DB::table('carts')->where('user_email',$use_email)->count();
        }
        return view('frontend.layoutsproduct.cart',compact('userCarts','categories','countProducts'));
    }

    public function deletecart($id)
    {
        $table = DB::table('carts')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success','Product has been removed in Cart');
    }

    public function updatecart(UpdateCartRequest $request,$id)
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
        $user = User::find($user_id);
         //get count product  in cart
         if(empty(\Auth::check())){
            $session_id = Session::get('session_id');
            $countProducts =  \DB::table('carts')->where('session_id',$session_id)->count();
        }else
        {
            $use_email = Auth::user()->email;
            $countProducts =  \DB::table('carts')->where('user_email',$use_email)->count();
        }
        return view('frontend.layoutsproduct.checkout',compact('user','userCarts','categories','countProducts'));
    }

    public function placeorder(PlaceOrderRequest $request)
    {

        $user_id = Auth::user()->id;
        $user_email = Auth::user()->email;
        $data = $request->only('country','name','company','address','city','state','zip','phone','payment_method','grand_total');
        $data['user_id'] = $user_id;
        $data['user_email'] = $user_email;
        $data['status'] ='';
        //Insert order in order table
        Order::create($data);
        //Get order_id in table order then insert  table order_details
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
            $order = Order::with('orderdetails')->find($order_id);
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
         //get count product  in cart
         if(empty(\Auth::check())){
            $session_id = Session::get('session_id');
            $countProducts =  \DB::table('carts')->where('session_id',$session_id)->count();
        }else
        {
            $use_email = Auth::user()->email;
            $countProducts =  \DB::table('carts')->where('user_email',$use_email)->count();
        }
        return view('frontend.layoutsproduct.thanks',compact('categories','countProducts'));
    }

    public function search(Request $request)
    {
        $data = $request->only('product');
        $search_product = $data['product'];
        $productsOfCategory = Product::whereHas('category', function($query) use($search_product) {
        $query->where('name', 'like', '%'.$search_product.'%');
        })->orWhere('name','LIKE','%'.$search_product.'%')->paginate(4)->appends(Input::except('page'));
    //    if($productsOfCategory->total() > 0)
    //    {
        $categories = Category::withCount('products')->orderBy('id')->get();
        //count total products
        $count = DB::table('products')->count();
         //get count product  in cart
         if(empty(\Auth::check())){
            $session_id = Session::get('session_id');
            $countProducts =  \DB::table('carts')->where('session_id',$session_id)->count();
        }else
        {
            $use_email = Auth::user()->email;
            $countProduct =  \DB::table('carts')->where('user_email',$use_email)->count();
        }
        return view('frontend.layoutsproduct.search',compact('categories','productsOfCategory','countProducts','search_product','count'));
    }

    public function contact()
    {
        $categories = Category::all();
         //get count product  in cart
         if(empty(\Auth::check())){
            $session_id = Session::get('session_id');
            $countProducts =  \DB::table('carts')->where('session_id',$session_id)->count();
        }else
        {
            $use_email = Auth::user()->email;
            $countProducts =  \DB::table('carts')->where('user_email',$use_email)->count();
        }
        return view('frontend.layoutsproduct.contact',compact('categories','countProducts'));
    }

    public function sendcontact(Request $request)
    {
        $data = $request->all();
        //code send mail
        \Mail::to('nguyennhdn@gmail.com')->send(new Contact($data['name'],$data['email'],$data['telephone'],$data['subject'],$data['commnet']));
         return redirect()->back()->with('success', 'Send success');
    }
}
