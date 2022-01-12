@extends('layouts.app')
@section('title', 'Home | Page')
@section('content')
<main class="main">
    <div class="intro-slider-container mb-5">
        <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" 
            data-owl-options='{
                "dots": true,
                "nav": false, 
                "responsive": {
                    "1200": {
                        "nav": true,
                        "dots": false
                    }
                }
            }'>
            @foreach ($deal_promotions as $deal_promotion)
                  <div class="intro-slide" style="background-image: url({{ asset('images/slider/' . $deal_promotion->picture) }});">
                    <div class="container intro-content">
                        <div class="row justify-content-end">
                            <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                                <h3 class="intro-subtitle text-third">{{ $deal_promotion->status }}</h3><!-- End .h3 intro-subtitle -->
                                <h1 class="intro-title">{{ $deal_promotion->product_name }}</h1>
                                <h1 class="intro-title">{{ $deal_promotion->specification }}</h1><!-- End .intro-title -->
    
                                <div class="intro-price">
                                    <sup class="intro-old-price">Tsh.{{ $deal_promotion->price }}</sup>
                                    <span class="text-third">
                                        Tsh.{{ $deal_promotion->discount }}<sup>.99</sup>
                                    </span>
                                </div><!-- End .intro-price -->
    
                                <a href="/shop" class="btn btn-primary btn-round">
                                    <span>Shop More</span>
                                    <i class="icon-long-arrow-right"></i>
                                </a>
                            </div><!-- End .col-lg-11 offset-lg-1 -->
                        </div><!-- End .row -->
                    </div><!-- End .intro-content -->
                </div><!-- End .intro-slide -->
            @endforeach
            
        </div><!-- End .intro-slider owl-carousel owl-simple -->

        <span class="slider-loader"></span><!-- End .slider-loader -->
    </div><!-- End .intro-slider-container -->

    {{-- <div class="container">
        <h2 class="title text-center mb-4">Explore Popular Categories</h2><!-- End .title text-center -->
        <div class="cat-blocks-container">
            <div class="row">
               @foreach ($categories as $category)
               <div class="col-6 col-sm-4 col-lg-2">
                    <a href="#" class="cat-block">
                        <figure>
                            <span>
                                <img src="{{ asset('images/category/' . $category->picture) }}" alt="">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">{{ $category->main_category_name }}</h3><!-- End .cat-block-title -->
                    </a>
                </div><!-- End .col-sm-4 col-lg-2 -->
               @endforeach
            </div><!-- End .row -->
        </div><!-- End .cat-blocks-container -->
    </div><!-- End .container --> --}}

    <div class="mb-3"></div><!-- End .mb-5 -->
    <div class="container new-arrivals">
        <h2 class="title text-center mb-4">Explore Popular Categories</h2><!-- End .title text-center -->
        <div class="tab-content tab-content-carousel just-action-icons-sm">
            <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                    data-owl-options='{
                        "nav": true, 
                        "dots": true,
                        "margin": 20,
                        "loop": true,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1200": {
                                "items":5
                            }
                        }
                    }'>
                    
                    @foreach ($categories as $category)
                    <div class="product">
                            <a href="/show_products/{{ $category->id }}" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="{{ asset('images/category/' . $category->picture) }}" alt="">
                                    </span>
                                </figure>
        
                                <h3 class="cat-block-title">{{ $category->main_category_name }}</h3><!-- End .cat-block-title -->
                            </a>
                    </div><!-- End .product -->
                    @endforeach

                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            
        </div><!-- End .tab-content -->
    </div><!-- End .container -->

    <div class="mb-5"></div><!-- End .mb-5 -->
    <div class="container for-you">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">Products For You</h2><!-- End .title -->
            </div><!-- End .heading-left -->

           <div class="heading-right">
                <a href="#" class="title-link">View All Products <i class="icon-long-arrow-right"></i></a>
           </div><!-- End .heading-right -->
        </div><!-- End .heading -->

        <div class="products">
            <div class="row justify-content-center">
               @foreach ($products as $product)
               <div class="col-6 col-md-4 col-lg-3">
                <div class="product product-2">
                    <figure class="product-media">
                        <span class="product-label label-circle label-sale">Sale</span>
                        <a href="#">
                            <img src="{{ asset('images/products/' . $product->picture) }}" alt="" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                        </div><!-- End .product-action -->

                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">{{ $product->sub_category_name }}</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="#">{{ $product->product_name }}</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            <span class="new-price">Tsh. {{ $product->discount }}</span>
                            <span class="old-price">Was, Tsh. {{ $product->price }}</span>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
            </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
               @endforeach
            </div><!-- End .row -->
        </div><!-- End .products -->
    </div><!-- End .container -->

    <div class="mb-4"></div><!-- End .mb-4 -->

    <div class="container">
        <hr class="mb-0">
    </div><!-- End .container -->

    <div class="icon-boxes-container bg-transparent">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-rocket"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                            <p>Orders $50 or more</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-rotate-left"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                            <p>Within 30 days</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-info-circle"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                            <p>when you sign up</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-life-ring"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                            <p>24/7 amazing services</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .icon-boxes-container -->
</main><!-- End .main -->
@endsection
