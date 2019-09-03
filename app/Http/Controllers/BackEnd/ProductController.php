<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use DB;
use Illuminate\Support\Facades\File;
use App\Http\Requests\BackEnd\ProductCreateRequest;
use App\Http\Requests\BackEnd\ProductEditRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(8);
        return view('backend.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listCategories = Category::all();
        return view('backend.product.create',compact('listCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCreateRequest $request)
    {
        $imagename = \DB::table('categories')->where('id',$request->category_id)->pluck('name')->get(0);
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->color = $request->color;
        $product->weight = $request->weight;
        $product->cpu = $request->cpu;
        $product->ram = $request->ram;
        $product->hdd = $request->hdd;
        $product->os = $request->os;
        $product->card = $request->card;
        $product->quantity = $request->quantity;
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // get image extension
            $filename = $imagename . '.' . $extension;
            $file->move('img/frontend/product/all/',$filename);
            $product->image = $filename;
        }
        else
        {
            $product->image ='';
        }
        $product->save();
        return redirect()->route('admin.product.index')->with('success','Created product success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listCategories = Category::all();
        $product = Product::find($id);
        $categoryOfProduct = $product->category()->pluck('id');
        return view('backend.product.edit',compact('listCategories','product','categoryOfProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductEditRequest $request, $id)
    {
        $product = Product::find($id);
        $imagename = \DB::table('categories')->where('id',$request->category_id)->pluck('name')->get(0);
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->color = $request->color;
        $product->weight = $request->weight;
        $product->cpu = $request->cpu;
        $product->ram = $request->ram;
        $product->hdd = $request->hdd;
        $product->os = $request->os;
        $product->card = $request->card;
        $product->quantity = $request->quantity;
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // get image extension
            $filename = $imagename . '.' . $extension;
            $file->move('img/frontend/product/all/',$filename);
            $product->image = $filename;
        }
        else
        {
            $product->image ='';
        }
        $product->save();
        return redirect()->route('admin.product.index')->with('success','Update product success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.product.index')->with('success','Delete product success');
    }
}

