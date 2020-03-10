@extends('layouts')

@section('content')
        <section id="cart_items">
        <div class="container col-sm-12">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <?php
                    $contents = Cart::content();

                    
                ?>
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Image</td>
                            <td class="description">Name</td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                          @foreach ($contents as $content)                             
                        <tr>
                            <td class="cart_product">
                                <a href=""><img src="{{ $content->options->image }}" style="width: 80px; height: 80px"></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">{{ $content->name}}</a></h4>
                                
                            </td>
                            <td class="cart_price">
                                <p>{{ $content->price}} TK</p>
                            </td>
                            <td class="cart_quantity">
                                <p>{{ $content->qty}}</p>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">{{ $content->total}}</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="{{ url('/delete-cart/'.$content->rowId) }}"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>

                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->
<section id="do_action">
	<div class="container">
		<div class="heading">
			<h3>What would you like to do next?</h3>
			<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
		</div>
		<div class="breadcrumbs">
			<ol class="breadcrumb">
			  <li><a href="#">Home</a></li>
			  <li class="active">Payment method</li>
			</ol>
		</div>
		<div class="paymentCont col-sm-6">
					<div class="headingWrap">
							<h3 class="headingTop text-center">Select Your Payment Method</h3>	
							<p class="text-center">Created with bootsrap button and using radio button</p>
					</div>
                    <form action="{{ url('order_place') }}" method="post">
                        {{ csrf_field()}}
					<div class="paymentWrap">
						<div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
				            <label class="btn paymentMethod ">
				            	<div class="method visa"></div>
				                <input type="radio" name="payment_getway" checked value="bkash"> 
				            </label>
				            <label class="btn paymentMethod">
				            	<div class="method master-card"></div>
				                <input type="radio" name="payment_getway" value="rocket"> 
				            </label>{{-- 
				            <label class="btn paymentMethod">
			            		<div class="method amex"></div>
				                <input type="radio" name="options">
				            </label> --}}{{-- 
				       <label class="btn paymentMethod">
			             		<div class="method vishwa"></div>
				                <input type="radio" name="options"> 
				            </label> --}}
				            <label class="btn paymentMethod">
			            		<div class="method ez-cash"></div>
				                <input type="radio" name="payment_getway" value="handcash"> 
				            </label> 
				         
				        </div>        
					</div>

                    <input type="submit" value="Submit" class="btn btn-success btn-block">
					{{-- <div class="footerNavWrap clearfix">
						<div class="btn btn-success pull-left btn-fyi"><span class="glyphicon glyphicon-chevron-left"></span> Done</div>
					</div> --}}
                    </form>

				</div>
	</div>
</section><!--/#do_action-->
@endsection