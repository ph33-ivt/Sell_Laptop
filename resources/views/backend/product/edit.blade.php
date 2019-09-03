@extends('backend.layouts.app')

@section('title')
Edit product | Edit Product
@endsection

@section('content')
<div class="row">
        <!-- /.card-header -->
        <div class="col-md-12">
                <!-- general form elements -->
                    <div class="card card-primary">
                        @include('messages.msg')
                        <div class="card-header">
                        <h3 class="card-title">Create Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action ="{{ route('admin.product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                            <label for="name">Name</label>
                            <input type="name" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ $product->name }}" required>
                            </div>
                            <div class="form-group">
                            <label for="description">Description</label>
                            <input type="description" class="form-control" id="description" name="description" placeholder="Enter description" value="{{ $product->description }}" required>
                            </div>
                            <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" min="1" class="form-control" id="price" name="price" placeholder="Enter price" value="{{ $product->price }}" required>
                            </div>
                            <div class="form-group">
                                <label for="price">color</label>
                                <input type="text"  class="form-control" id="color" name="color" placeholder="Enter color" value="{{ $product->color }}" required>
                            </div>
                            <div class="form-group">
                                <label for="weight">weight</label>
                                <input type="text" class="form-control" id="weight" name="weight" placeholder="Enter weight" value="{{ $product->weight }}" required>
                            </div>
                            <div class="form-group">
                                <label for="cpu">cpu</label>
                                <input type="text" class="form-control" id="cpu" name="cpu" placeholder="Enter cpu" value="{{ $product->cpu }}" required>
                            </div>
                            <div class="form-group">
                                    <label for="ram">ram</label>
                                    <input type="text" class="form-control" id="ram" name="ram" placeholder="Enter ram" value="{{ $product->ram }}" required>
                            </div>
                            <div class="form-group">
                                    <label for="hdd">Hdd</label>
                                    <input type="text" class="form-control" id="hdd" name="hdd" placeholder="Enter hdd" value="{{ $product->hdd }}" required>
                            </div>
                            <div class="form-group">
                                    <label for="os">os</label>
                                    <input type="text" class="form-control" id="os" name="os" placeholder="Enter os" value="{{ $product->os }}" required>
                            </div>
                            <div class="form-group">
                                    <label for="card">card</label>
                                    <input type="text" class="form-control" id="card" name="card" placeholder="Enter card" value="{{ $product->card }}" required>
                            </div>
                            <div class="form-group">
                                    <label for="quantity">quantity</label>
                                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" value="{{ $product->quantity }}" required>
                            </div>
                            <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="image" value="{{ $product->image }}">
                                    <label class="custom-file-label" for="customFile">Choose image</label>
                            </div>
                            <div class="form-group">
                                    <label>Select Category for Product</label>
                                    <select class="form-control" name="category_id" >
                                      @foreach ($listCategories as $category)
                                        <option value="{{ $category->id}}" {{ ($categoryOfProduct->contains($category->id)) ? 'selected' : '' }}>{{$category->name }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        </form>
                    </div>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
    <!-- /.col -->
  </div>

@endsection
