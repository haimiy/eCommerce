@extends('layouts.vendor.layouts.app')
@section('title' , 'Create Products | Page')
@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
            <h5 class="card-text text-center">Add Products</h5><br>
            <!-- if validation in the controller fails, show the errors -->
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow mb-4">
                <div class="card-header">
                  <strong class="card-title">Add Products</strong>
                </div>
                <div class="card-body">
                  <form method="POST" action="/vendor/store_product" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom01">Product Name</label>
                        <input type="text" class="form-control" id="validationCustom01" name="product_name">
                        @if ($errors->has('product_name'))
                                <span class="text-danger">{{ $errors->first('product_name') }}</span>
                        @endif
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Quantity</label>
                        <input type="number" class="form-control" name="quantity">
                        @if ($errors->has('quantity'))
                                <span class="text-danger">{{ $errors->first('quantity') }}</span>
                        @endif
                      </div>
                      <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <div class="input-group">
                          <textarea class="form-control" name="description" id="example-textarea" rows="4"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Price</label>
                        <input type="number" class="form-control" id="validationCustom03" name="price">
                        @if ($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}</span>
                        @endif
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationCustom05">Discount</label>
                        <input type="number" class="form-control" id="validationCustom05" name="discount">
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationCustom04">Sub Category</label>
                        <select class="custom-select" name="minor_category_id" id="validationCustom04">
                          <option selected disabled value="">Choose...</option>
                          @foreach ($sub_categories as $sub_category)
                              <option value="{{ $sub_category->id }}">{{ $sub_category->sub_category_name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <label for="example-email">Product Sizes</label>
                    <div class="input-group mb-3">
                        <input class="form-control" name="product_sizes[]" type="number">
                        <div class="input-group-append">
                            <button id="removeSizeRow" type="button" class="btn btn-danger btn-sm" >Remove</button>
                        </div>
                        @if ($errors->has('product_sizes'))
                                <span class="text-danger">{{ $errors->first('product_sizes') }}</span>
                        @endif
                    </div>
                    <div id="newSizeRow"></div>
                        <button id="addSizeRow" type="button" class="btn btn-success btn-sm" >Add Size Row</button>
                    <br>
                    <br>

                    <label for="example-email">Product Colors</label>
                    <div class="input-group mb-3">
                        <input class="form-control" name="product_colors[]" type="text">
                        <div class="input-group-append">
                            <button id="removeColorRow" type="button" class="btn btn-danger btn-sm" >Remove</button>
                        </div>
                        @if ($errors->has('product_colors'))
                                <span class="text-danger">{{ $errors->first('product_colors') }}</span>
                        @endif
                    </div>
                    <div id="newColorRow"></div>
                        <button id="addColorRow" type="button" class="btn btn-success btn-sm" >Add Color Row</button>
                    <br>
                    <br>

                    <label for="example-email">Product Images</label>
                    <div class="input-group mb-3">
                        <input class="form-control-file" name="product_images[]" type="file" multiple>
                        {{-- <div class="input-group-append">
                            <button id="removeImageRow" type="button" class="btn btn-danger btn-sm" >Remove</button>
                        </div> --}}
                        @if ($errors->has('product_images'))
                                <span class="text-danger">{{ $errors->first('product_images') }}</span>
                        @endif
                    </div>
                    {{-- <div id="newImageRow"></div>
                        <button id="addImageRow" type="button" class="btn btn-success btn-sm" >Add Image Row</button>
                    <br> --}}
                    <br>
                    <button class="btn btn-primary float-right" type="submit">Submit</button>
                  </form>
                </div> <!-- /.card-body -->
              </div> <!-- /.card -->
            </div> <!-- /.col -->
          </div> <!-- end section -->
        </div> <!-- /.col-12 col-lg-10 col-xl-10 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->
  </main> <!-- main -->
@endsection
@section('js')
    <script>
        $("#addColorRow").click(function(){
            var html = '';
            html += '<div id="inputColorRow">';
            html += '<div class="input-group mb-3">';
            html += '<input class="form-control" name="product_colors[]" type="text">';
            html += '<div class="input-group-append">';
            html += '<button id="removeColorRow" type="button" class="btn btn-danger btn-sm" >Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newColorRow').append(html);
        });
        $(document).on('click', '#removeColorRow', function(){
            $(this).closest('#inputColorRow').remove();
        });

        $("#addImageRow").click(function(){
            var html = '';
            html += '<div id="inputImageRow">';
            html += '<div class="input-group mb-3">';
            html += '<input class="form-control-file" name="product_images[]" type="file">';
            html += '<div class="input-group-append">';
            html += '<button id="removeImageRow" type="button" class="btn btn-danger btn-sm" >Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newImageRow').append(html);
        });
        $(document).on('click', '#removeImageRow', function(){
            $(this).closest('#inputImageRow').remove();
        });

        $("#addSizeRow").click(function(){
            var html = '';
            html += '<div id="inputSizeRow">';
            html += '<div class="input-group mb-3">';
            html += '<input class="form-control" name="product_sizes[]" type="number">';
            html += '<div class="input-group-append">';
            html += '<button id="removeSizeRow" type="button" class="btn btn-danger btn-sm" >Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newSizeRow').append(html);
        });
        $(document).on('click', '#removeSizeRow', function(){
            $(this).closest('#inputSizeRow').remove();
        });
    </script>
@endsection