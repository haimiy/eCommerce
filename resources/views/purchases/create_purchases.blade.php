@extends('layouts.vendor.layouts.app')
@section('title' , 'Create Purchases | Page')
@section('content')
  <main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h5 class="card-text text-center">Add Purchases</h5><br>
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
                    <p class="mb-2"><strong>Add Purchases</strong></p>
                    <hr>
                  <form method="POST" action="/vendor/store_purchases">
                    @csrf
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label for="simpleinput">Product Name</label>
                            <input type="text" id="simpleinput" name="product_name" class="form-control" >
                            @if ($errors->has('product_name'))
                                <span class="text-danger">{{ $errors->first('product_name') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label for="simpleinput">Quantity</label>
                            <input type="number" id="simpleinput" name="quantity" class="form-control" >
                            @if ($errors->has('quantity'))
                                <span class="text-danger">{{ $errors->first('quantity') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label for="simpleinput">Product Cost</label>
                            <input type="number" id="simpleinput" step="0.01" name="cost_price" class="form-control" >
                            @if ($errors->has('cost_price'))
                                <span class="text-danger">{{ $errors->first('cost_price') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label for="simpleinput">Advance</label>
                            <input type="number" id="simpleinput" name="advance" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="simpleinput">Purchasing date</label>
                            <input type="date" id="simpleinput" name="purchasing_date" class="form-control" >
                            @if ($errors->has('purchasing_date'))
                                <span class="text-danger">{{ $errors->first('purchasing_date') }}</span>
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