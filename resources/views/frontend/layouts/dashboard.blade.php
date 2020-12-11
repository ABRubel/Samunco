@extends('frontend.layouts.master')
@section('content')


</section>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-block">
                                            <img src="{{url('public/uploads/products/' .$product->image)}}" class="center" style="height: 215px; width: 215px; display: block;  margin-left: auto; margin-right: auto;">
                                            <h2 class="mb-4 mt-2 text-center">{{ $product->name }}</h2>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-6">
                                                    <h6 class="d-flex align-items-center m-b-0">
                                                        Price: {{ $product->amount }}
                                                    </h6>
                                                </div>
                                                <div class="col-6">
                                                    <h6 class="m-b-0">
                                                        Quantity: {{ $product->quantity }}
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="row d-flex align-items-center mt-2">
                                                <a href="#" class="btn btn-sm btn-danger text-left">Add to Wishlist</a>
                                                <a href="#" class="btn btn-sm btn-success text-right">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection