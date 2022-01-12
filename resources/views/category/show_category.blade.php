@extends('layouts.vendor.layouts.app')
@section('title' , 'Show Category | Page')
@section('css')
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assetTindy/css/dataTables.bootstrap4.css') }}">
@endsection
@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <a href="/vendor/create_category" class="btn btn-primary mb-2"><span class="fe fe-edit fe-16 mr-1"></span> Add Categories</a>
          <h5 class="card-text text-center">List Of All Categories</h5>
          <div class="row my-4">
            <!-- Small table -->
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-body">

                  {{-- @foreach ($tests as $test)
                  <img src="{{ asset('images/category/' . $test->picture) }}" alt="">
                  @endforeach --}}

                  <!-- table -->
                  <table class="table datatables" id="dataTable-1">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Main Category</th>
                        <th>Sub Category</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $category->main_category_name }}</td>
                          <td>{{ $category->sub_category_name }}</td>
                          <td>
                              <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <span class="text-muted sr-only">Action</span>
                              </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Delete</a>
                                </div>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div> <!-- simple table -->
          </div> <!-- end section -->
        </div> <!-- .col-12 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->
</main> <!-- main -->
@endsection
@section('js')
<script src="{{  asset('assetTindy/js/jquery.dataTables.min.js') }}"></script>
<script src="{{  asset('assetTindy/js/dataTables.bootstrap4.min.js') }}"></script>
<script>
  $('#dataTable-1').DataTable(
  {
    autoWidth: true,
    "lengthMenu": [
      [10, 16, 32, 64, -1],
      [10, 16, 32, 64, "All"]
    ]
  });
</script>
@endsection