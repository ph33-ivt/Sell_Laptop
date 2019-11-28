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
                        <h3 class="card-title">Update Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action ="{{ route('admin.product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                            <label for="name">Name<span style="color:red">*</span></label>
                            <input type="name" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ $product->name }}" >
                            @if ($errors->has('name'))
                               <p class="help-block" style="color:red">
                                 {{ $errors->first('name') }}
                                </p>
                             @endif
                            </div>
                            <div class="form-group">
                            <label for="description">Description<span style="color:red">*</span></label>
                            <input type="description" class="form-control" id="description" name="description" placeholder="Enter description" value="{{ $product->description }}" >
                            @if ($errors->has('description'))
                            <p class="help-block" style="color:red">
                              {{ $errors->first('description') }}
                             </p>
                          @endif
                            </div>
                            <div class="form-group">
                            <label for="price">Price<span style="color:red">*</span></label>
                            <input type="number" min="1" class="form-control" id="price" name="price" placeholder="Enter price" value="{{ $product->price }}" >
                            @if ($errors->has('price'))
                            <p class="help-block" style="color:red">
                              {{ $errors->first('price') }}
                             </p>
                          @endif
                            </div>
                            <div class="form-group">
                                <label for="price">color<span style="color:red">*</span></label>
                                <input type="text"  class="form-control" id="color" name="color" placeholder="Enter color" value="{{ $product->color }}" >
                                @if ($errors->has('color'))
                                   <p class="help-block" style="color:red">
                                     {{ $errors->first('color') }}
                                  </p>
                                 @endif
                            </div>
                            <div class="form-group">
                                <label for="weight">weight<span style="color:red">*</span></label>
                                <input type="text" class="form-control" id="weight" name="weight" placeholder="Enter weight" value="{{ $product->weight }}" >
                                @if ($errors->has('weight'))
                                <p class="help-block" style="color:red">
                                  {{ $errors->first('weight') }}
                               </p>
                              @endif
                            </div>
                            <div class="form-group">
                                <label for="cpu">cpu<span style="color:red">*</span></label>
                                <input type="text" class="form-control" id="cpu" name="cpu" placeholder="Enter cpu" value="{{ $product->cpu }}" >
                                @if ($errors->has('cpu'))
                                <p class="help-block" style="color:red">
                                  {{ $errors->first('cpu') }}
                               </p>
                              @endif
                            </div>
                            <div class="form-group">
                                    <label for="ram">ram<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="ram" name="ram" placeholder="Enter ram" value="{{ $product->ram}}">
                                    @if ($errors->has('ram'))
                                    <p class="help-block" style="color:red">
                                      {{ $errors->first('ram') }}
                                   </p>
                                  @endif
                            </div>
                            <div class="form-group">
                                    <label for="hdd">Hdd<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="hdd" name="hdd" placeholder="Enter hdd" value="{{ $product->hdd }}" >
                                    @if ($errors->has('hdd'))
                                    <p class="help-block" style="color:red">
                                      {{ $errors->first('hdd') }}
                                   </p>
                                  @endif
                            </div>
                            <div class="form-group">
                                    <label for="os">os<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="os" name="os" placeholder="Enter os" value="{{ $product->os }}" >
                                    @if ($errors->has('os'))
                                    <p class="help-block" style="color:red">
                                      {{ $errors->first('os') }}
                                   </p>
                                  @endif
                            </div>
                            <div class="form-group">
                                    <label for="card">card<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="card" name="card" placeholder="Enter card" value="{{ $product->card }}" >
                                    @if ($errors->has('card'))
                                    <p class="help-block" style="color:red">
                                      {{ $errors->first('card') }}
                                   </p>
                                  @endif
                            </div>
                            <div class="form-group">
                                    <label for="quantity">quantity<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" value="{{ $product->quantity }}" >
                                    @if ($errors->has('quantity'))
                                    <p class="help-block" style="color:red">
                                      {{ $errors->first('quantity') }}
                                   </p>
                                  @endif
                            </div>
                            <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="image" value="{{ $product->image }}">
                                    <label class="custom-file-label" for="customFile">Choose image</label>
                                    @if ($errors->has('image'))
                                    <p class="help-block" style="color:red">
                                      {{ $errors->first('image') }}
                                   </p>
                                  @endif
                            </div>
                            <div class="form-group">
                                    <label>Select Category for Product<span style="color:red">*</span></label>
                                    <select class="form-control" name="category_id" >
                                      @foreach ($listCategories as $category)
                                        <option value="{{ $category->id}}" {{ ($categoryOfProduct->contains($category->id)) ? 'selected' : '' }}>{{$category->name }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                  @if ($errors->has('category_id'))
                                  <p class="help-block" style="color:red">
                                    {{ $errors->first('category_id') }}
                                 </p>
                                @endif
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
