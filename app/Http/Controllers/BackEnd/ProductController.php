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
        $this->authorize('viewindex',Product::class);
        $products = Product::orderBy('id','desc')->paginate(8);
        return view('backend.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Product::class);
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
        $this->authorize('create',Product::class);
        $imagename = \DB::table('categories')->where('id',$request->category_id)->pluck('name')->get(0);
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // get image extension
            $filename = $imagename . '.' . $extension;
            $file->move('img/frontend/product/all/',$filename);
        }
        else
        {
            return redirect()->back()->with('error','No image import');
        }
        $data = $request->except('_token','image');
        $data['image'] = $filename;

            Product::create($data);
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
        $this->authorize('update',Product::class);
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
        $this->authorize('update',Product::class);
        $product = Product::find($id);
        $imagename = \DB::table('categories')->where('id',$request->category_id)->pluck('name')->get(0);
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // get image extension
            $filename = $imagename . '.' . $extension;
            $file->move('img/frontend/product/all/',$filename);
        }
        else
        {
            return redirect()->back()->with('error','No image import');
        }
        $data = $request->except('_token','image');
        $data['image'] = $filename;
        dd($data);
        $product->update($data);
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
        $this->authorize('delete',Product::class);
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.product.index')->with('success','Delete product success');
    }
}


