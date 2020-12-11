@extends('admin.master')
@push('css')
   <link rel="stylesheet" type="text/css" href="{{ asset('public/DataTables-1.10.18/css/jquery.dataTables.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('public/DataTables-2.2.2/css/responsive.dataTables.min.css') }}">
   @endpush
@section('content')
   <div class="pcoded-main-container">
   <div class="pcoded-wrapper">
       <div class="pcoded-content">
           <div class="pcoded-inner-content">
               <div class="main-body">
                   <div class="page-wrapper">
                       <div class="row">
                           <div class="col-md-12">
                              <div class="card">
                                    <div class="card-header">
                                      <div class="row">
                                      <div class="col-md-10">
                                        <h5>All Products</h5>
                                      </div>
                                      <div class="col-md-2">
                                          <a href="{{ url('admin/product/add') }}" class="btn btn-sm btn-primary pull-right"><span class="fa fa-plus"> &nbsp;</span>Add Product</a>
                                      </div>
                                    </div>
                                    </div>
                                   <div class="card-block">
                                       {!! $dataTable->table() !!}
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   </div>
@endsection
@push('scripts')
   <script src="{{ asset('public/DataTables-1.10.18/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
   <script src="{{ asset('public/DataTables-2.2.2/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
   <script defer src="{{ asset('public/vendor/datatables/buttons.server-side.js') }}"></script>
   {!! $dataTable->scripts() !!}
    
@endpush