@extends('layouts.vendor.layouts.app')
@section('title' , 'Create Category | Page')
@section('content')
  <main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h5 class="card-text text-center">Add Categories</h5><br>
          <!-- if validation in the controller fails, show the errors -->
          @if (session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
          @endif
          <div class="row">
            <div class="col-md-6">
              <div class="card shadow mb-4">
                <div class="card-body">
                    <p class="mb-2"><strong>Main Categories</strong></p>
                    <hr>
                  <form method="POST" action="/vendor/create_major_category" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                      <div class="form-group mb-3">
                          <label for="simpleinput">Category Name</label>
                          <input type="text" id="simpleinput" name="main_category_name" class="form-control" >
                          @if ($errors->has('main_category_name'))
                              <span class="text-danger">{{ $errors->first('main_category_name') }}</span>
                          @endif
                      </div>
                      <div class="form-group mb-3">
                          <label for="example-email">Description</label>
                          <textarea class="form-control" name="description" id="example-textarea" rows="4"></textarea>
                      </div>
                          <div class="form-group mb-3">
                          <label for="customFile">Picture</label>
                          <div class="custom-file">
                              <input type="file" class="custom-file-input" name="picture" id="customFile" >
                              <label class="custom-file-label" for="customFile">Choose file....</label>
                              @if ($errors->has('picture'))
                                <span class="text-danger">{{ $errors->first('picture') }}</span>
                              @endif
                          </div>
                          </div>
                    </div> <!-- /.col -->
                </div> <!-- /.card-body -->
                  <div class="card-footer">
                      <button type="submit" class="btn btn-primary mb-2">Submit</button>
                  </div>
                </form>
              </div> <!-- /.card -->
            </div> <!-- /.col -->
            
            <div class="col-md-6">
              <div class="card shadow mb-4">
                <div class="card-body">
                  <p class="mb-2"><strong>Sub Categories</strong></p>
                  <hr>
                  <form method="POST" action="/vendor/create_minor_category">
                    @csrf
                  <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="simpleinput">Category Name</label>
                        <input type="text" id="simpleinput" name="sub_category_name" class="form-control">
                        @if ($errors->has('sub_category_name'))
                              <span class="text-danger">{{ $errors->first('sub_category_name') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                      <label for="simpleinput">Main Category Name</label>
                      <select class="form-control" name="major_category_id">
                        <option value="">--Select--</option>
                        @foreach ($major_categories as $major_category)
                            <option value="{{ $major_category->id }}">{{ $major_category->main_category_name }}</option>
                        @endforeach
                      </select> 
                    </div>
                    <div class="form-group mb-3">
                        <label for="example-email">Description</label>
                        <textarea class="form-control" name="description" id="example-textarea" rows="4"></textarea>
                    </div>
                  </div> <!-- /.col -->
                </div> <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary mb-2">Submit</button>
              </div>
            </form>
              </div> <!-- /.card -->
            </div> <!-- /.col -->
          </div>
        </div> <!-- .col-12 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->
  </main> <!-- main -->
@endsection