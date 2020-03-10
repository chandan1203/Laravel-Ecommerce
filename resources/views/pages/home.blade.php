@extends('layouts')

@section('content')
	                        <h2 class="title text-center">Features Items</h2>
                        @foreach ($all_published_product as $publish_product)
                            {{-- expr --}}
                        
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{ url($publish_product->product_image)}}" style="height: 300px" />
                                            <h2>{{ $publish_product->product_price}}</h2>
                                            <p>{{ $publish_product->product_name }}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>{{ $publish_product->product_price}}</h2>
                                                <a href="{{ url('/view_product/'.$publish_product->product_id) }}">{{ $publish_product->product_name }}</a>
                                                <a href="{{ url('/view_product/'.$publish_product->product_id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>{{ $publish_product->manufacture_name }}</a></li>
                                        <li><a href="{{ url('/view_product/'.$publish_product->product_id) }}"><i class="fa fa-plus-square"></i>View Product</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach


@endsection