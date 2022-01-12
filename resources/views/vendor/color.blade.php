@extends('layouts.vendor.layouts.app')
@section('title' , 'Create Color | Page')
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
            <div class="col-md-12">
              <div class="card shadow mb-4">
                <div class="card-body">
                    <p class="mb-2"><strong>Color</strong></p>
                    <hr>
                  <form method="POST" action="/vendor/store_colors">
                    @csrf
                    <div class="col-md-12">
                      <div class="form-group mb-3">
                          <label for="simpleinput">Name</label>
                          <input type="text" id="simpleinput" name="name" class="form-control" >
                          @if ($errors->has('name'))
                              <span class="text-danger">{{ $errors->first('name') }}</span>
                          @endif
                      </div>
                      <div class="form-group mb-3">
                        <label for="simpleinput">Color</label>
                        <input type="color" id="example-color" name="color" class="form-control" value="#28a745">
                        @if ($errors->has('color'))
                            <span class="text-danger">{{ $errors->first('color') }}</span>
                        @endif
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
@section('js')
<script src="{{ asset('assetTindy/js/tinycolor-min.js') }}"></script>
@endsection