<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url('images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url('images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url('images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{url('images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<style type="text/css">
.paymentWrap {
    padding: 50px;
}

.paymentWrap .paymentBtnGroup {
    max-width: 800px;
    margin: auto;
}

.paymentWrap .paymentBtnGroup .paymentMethod {
    padding: 40px;
    box-shadow: none;
    position: relative;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active {
    outline: none !important;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active .method {
    border-color: #4cd264;
    outline: none !important;
    box-shadow: 0px 3px 22px 0px #7b7b7b;
}

.paymentWrap .paymentBtnGroup .paymentMethod .method {
    position: absolute;
    right: 3px;
    top: 3px;
    bottom: 3px;
    left: 3px;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    border: 2px solid transparent;
    transition: all 0.5s;
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.visa {
    background-image: url("https://thefinancialexpress.com.bd/uploads/1525104839.jpg");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.master-card {
    background-image: url("https://scontent.fdac17-1.fna.fbcdn.net/v/t1.0-9/p960x960/56191305_1074649016065535_8893606934653960192_o.jpg?_nc_cat=1&_nc_oc=AQnk91nVcNZVMvJMqFq9OYW9vtossSCK0x6_U4MkOIj0fcUj5X2bXYuGkHtJrG0DsFM&_nc_ht=scontent.fdac17-1.fna&_nc_tp=6&oh=719ec5a2546a930c3c5306d340b0804d&oe=5F02D15A");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.amex {
    background-image: url("http://www.paymentscardsandmobile.com/wp-content/uploads/2015/08/Amex-icon.jpg");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.vishwa {
    background-image: url("http://i.imgur.com/VkiM7PL.jpg");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.ez-cash {
    background-image: url("https://bloximages.newyork1.vip.townnews.com/richmond.com/content/tncms/assets/v3/editorial/4/56/456e99d6-a3ab-11e5-9a68-c7885e34b992/5670e4e3ef5d8.image.jpg?resize=750%2C500");
}


.paymentWrap .paymentBtnGroup .paymentMethod .method:hover {
    border-color: #4cd264;
    outline: none !important;
} 
</style>

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +8801716852802 </a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> chandan.aece.iu@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="https://www.facebook.com/chandan.sharma.52"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/chandan-sharma-22275b170/"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href=" {{ url('/') }}"><img src="{{ asset('frontend/images/home/logo.png')}}" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">
                            {{-- <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    USA
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Canada</a></li>
                                    <li><a href="#">UK</a></li>
                                </ul>
                            </div> --}}
                            
                           {{--  <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    DOLLAR
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Canadian Dollar</a></li>
                                    <li><a href="#">Pound</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                                @php
                                    $customer_id = Session::get('customer_id');
                                    $shipping_id = Session::get('shipping_id');
                                   
                                @endphp
                                @if($customer_id != NULL && $shipping_id == NULL)
                                <li><a href="{{ url('/checkout') }}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                

                                @elseif($customer_id != NULL && $shipping_id != NULL)
                                    <li><a href="{{ url('/payment') }}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                @else
                                    <li><a href="{{ url('/login-check') }}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                @endif

                                


                                <li><a href="{{ url('/show-cart') }}"><i class="fa fa-shopping-cart"></i> Cart</a></li>

                                @php
                                    $customer_id = Session::get('customer_id');
                                @endphp
                                @if ($customer_id != NULL)
                                <li><a href="{{ url('/customer-logout') }}"><i class="fa fa-lock"></i> Logout</a></li>
                                @else
                                <li><a href="{{ url('/login-check') }}"><i class="fa fa-lock"></i>Login</a></li>
                                @endif
                                


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{ url('/') }}" class="active">Home</a></li>
                                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{ url('/') }}">Products</a></li>
                                        <li><a href="{{ url('/') }}">Product Details</a></li> 

                                        @php
                                        $customer_id = Session::get('customer_id');
                                        @endphp
                                        @if ($customer_id != NULL)
                                        <li><a href="{{ url('/checkout') }}">Checkout</a></li>
                                        @else
                                        <li><a href="{{ url('/login-check') }}">Checkout</a></li>
                                        @endif 


                                        <li><a href="{{ url('/show-cart') }}">Cart</a></li> 
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
                                {{-- <li><a href="404.html">404</a></li> --}}
                                <li><a href="{{ url('/contact_page') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <form action="{{ url('/search') }}">
                               
                            <input type="text" placeholder="Search" name="searchData" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
    


        <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <?php
                                $all_publish_slider = DB::table('tbl_slider')
                                                    ->where('publication_status',1)
                                                    ->get();
                                $i=1;
                            ?>
                            @foreach ($all_publish_slider as $slider)
                            
                            <?php if($i==1) {?>
                            <div class="item active">

                                <?php } else{?>
                                <div class="item">
                                    <?php }?>
                                <div class="col-sm-4">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free E-Commerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-8">
                                    <img src="{{ url($slider->slider_image) }}" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            <?Php $i++; ?>
                            @endforeach
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <?php
                                $all_published_category = DB::table('tbl_category')
                                                        ->where('publication_status', 1)
                                                        ->get()
                            ?>
                                @foreach ($all_published_category as $category)
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a href="{{ url('/product_by_category/'.$category->category_id) }}">{{ $category->category_name}}</a></h4>
                                        </div>
                                    </div>
                                @endforeach


                            

                        </div><!--/category-products-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <?php 
                                        $all_publish_manufacture = DB::table('tbl_manufacture')
                                            ->where('publication_status',1)
                                            ->get();
                                     ?>

                                    @foreach ( $all_publish_manufacture as $manufacture)
                                        <li><a href="{{ url('/product_by_manufacture/'.$manufacture->manufacture_id) }}"> <span class="pull-right">(50)</span>{{ $manufacture->manufacture_name}}</a></li>
                                    @endforeach

                                   
                                    

                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                        <div class="price-range"><!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div><!--/price-range-->
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="images/home/shipping.jpg" alt="" />
                        </div><!--/shipping-->
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        @yield('content')
                    </div><!--/recommended_items-->
                    
                </div>
            </div>
        </div>
    </section>
    
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>e</span>-shopper</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ url('frontend/images/home/iframe1.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ url('frontend/images/home/iframe2.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ url('frontend/images/home/iframe3.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ url('frontend/images/home/iframe4.png')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="images/home/map.png" alt="" />
                            <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Online Help</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Order Status</a></li>
                                <li><a href="#">Change Location</a></li>
                                <li><a href="#">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quock Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">T-Shirt</a></li>
                                <li><a href="#">Mens</a></li>
                                <li><a href="#">Womens</a></li>
                                <li><a href="#">Gift Cards</a></li>
                                <li><a href="#">Shoes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privecy Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Billing System</a></li>
                                <li><a href="#">Ticket System</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Company Information</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Store Location</a></li>
                                <li><a href="#">Affillate Program</a></li>
                                <li><a href="#">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Get the most recent updates from <br />our site and be updated your self...</p>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2020 E-SHOPPER Inc. All rights reserved.</p>
                    <p class="pull-right">Developed by <span><a target="_blank" href="https://www.facebook.com/chandan.sharma.52">Chandan Kumar Sharma</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
<script src="{{ asset("frontend/js/jquery.js")}}"></script>
<script src="{{ asset("frontend/js/bootstrap.min.js")}}"></script>
<script src="{{ asset("frontend/js/jquery.scrollUp.min.js")}}"></script>
<script src="{{ asset("frontend/js/price-range.js")}}"></script>
<script src="{{ asset("frontend/js/jquery.prettyPhoto.js")}}"></script>
<script src="{{ asset("frontend/js/main.js")}}"></script>



</body>
</html>