@extends('frontend.master')
@section('content')
    <!-- slider-area -->
    <section class="home-seven-slider">
        <div class="h7-slider-active">
            <div class="h7-slider-item" data-background="img/slider/h7_slider_bg01.jpg">
                <div class="container custom-container-two">
                    <div class="h7-slider-wrap">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-7 order-0 order-lg-2">
                                <div class="h7-slider-img">
                                    <img src="img/slider/h7_slider_img01.png" alt="">
                                    {{-- <div class="product-tooltip" style="left: 47%; top: 25%;">
                                        <div class="tooltip-btn"></div>
                                        <div class="features-product-item product-tooltip-item">
                                            <div class="close-btn"><i class="flaticon-targeting-cross"></i></div>
                                            <div class="features-product-thumb">
                                                <a href="shop-details.html">
                                                    <img src="img/product/tooltip_product01.png" alt="">
                                                </a>
                                            </div>
                                            <div class="features-product-content">
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <h5><a href="shop-details.html">Exclusive Chair</a></h5>
                                                <p class="price">$45.00</p>
                                                <div class="features-product-bottom">
                                                    <ul>
                                                        <li class="color-option">
                                                            <span class="gray"></span>
                                                            <span class="cyan"></span>
                                                            <span class="orange"></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                        </div>
                                    </div>
                                    <div class="product-tooltip" style="left: 16%; top: 26%;">
                                        <div class="tooltip-btn"></div>
                                        <div class="features-product-item product-tooltip-item">
                                            <div class="close-btn"><i class="flaticon-targeting-cross"></i></div>
                                            <div class="features-product-thumb">
                                                <a href="shop-details.html">
                                                    <img src="img/product/tooltip_product02.png" alt="">
                                                </a>
                                            </div>
                                            <div class="features-product-content">
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <h5><a href="shop-details.html">Exclusive Lamp</a></h5>
                                                <p class="price">$45.00</p>
                                                <div class="features-product-bottom">
                                                    <ul>
                                                        <li class="color-option">
                                                            <span class="gray"></span>
                                                            <span class="cyan"></span>
                                                            <span class="orange"></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5">
                                <div class="h7-slider-content">
                                    <span class="sub-title" data-animation-in="fadeInUpBig" data-delay-in=".2"
                                        data-duration-in="1.5">new arrival</span>
                                    <h2 class="title" data-animation-in="fadeInUpBig" data-delay-in=".4"
                                        data-duration-in="1.5">New indoor top deal <span>!</span></h2>
                                    <p data-animation-in="fadeInUpBig" data-delay-in=".6" data-duration-in="1.5">Get up to
                                        50% off Today Only</p>
                                    <a href="shop-sidebar.html" class="btn" data-animation-in="fadeInUpBig"
                                        data-delay-in=".8" data-duration-in="1.5">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="overlay-text">New Season</div>
                    </div>
                </div>
            </div>
            <div class="h7-slider-item" data-background="img/slider/h7_slider_bg02.jpg">
                <div class="container custom-container-two">
                    <div class="h7-slider-wrap">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-7 order-0 order-lg-2">
                                <div class="h7-slider-img">
                                    <img src="img/slider/h7_slider_img02.png" alt="">
                                    <div class="product-tooltip" style="left: 47%; top: 38%;">
                                        <div class="tooltip-btn"></div>
                                        <div class="features-product-item product-tooltip-item">
                                            <div class="close-btn"><i class="flaticon-targeting-cross"></i></div>
                                            <div class="features-product-thumb">
                                                <a href="shop-details.html">
                                                    <img src="img/product/tooltip_product01.png" alt="">
                                                </a>
                                            </div>
                                            <div class="features-product-content">
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <h5><a href="shop-details.html">Exclusive Chair</a></h5>
                                                <p class="price">$45.00</p>
                                                <div class="features-product-bottom">
                                                    <ul>
                                                        <li class="color-option">
                                                            <span class="gray"></span>
                                                            <span class="cyan"></span>
                                                            <span class="orange"></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                        </div>
                                    </div>
                                    <div class="product-tooltip" style="left: 8%; top: 60%;">
                                        <div class="tooltip-btn"></div>
                                        <div class="features-product-item product-tooltip-item">
                                            <div class="close-btn"><i class="flaticon-targeting-cross"></i></div>
                                            <div class="features-product-thumb">
                                                <a href="shop-details.html">
                                                    <img src="img/product/tooltip_product02.png" alt="">
                                                </a>
                                            </div>
                                            <div class="features-product-content">
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <h5><a href="shop-details.html">Exclusive Lamp</a></h5>
                                                <p class="price">$45.00</p>
                                                <div class="features-product-bottom">
                                                    <ul>
                                                        <li class="color-option">
                                                            <span class="gray"></span>
                                                            <span class="cyan"></span>
                                                            <span class="orange"></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5">
                                <div class="h7-slider-content">
                                    <span class="sub-title" data-animation-in="fadeInUpBig" data-delay-in=".2"
                                        data-duration-in="1.5">new arrival</span>
                                    <h2 class="title" data-animation-in="fadeInUpBig" data-delay-in=".4"
                                        data-duration-in="1.5">Similar Sofa top deal <span>!</span></h2>
                                    <p data-animation-in="fadeInUpBig" data-delay-in=".6" data-duration-in="1.5">Get up to
                                        50% off Today Only</p>
                                    <a href="shop-sidebar.html" class="btn" data-animation-in="fadeInUpBig"
                                        data-delay-in=".8" data-duration-in="1.5">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h7-slider-item" data-background="img/slider/h7_slider_bg03.jpg">
                <div class="container custom-container-two">
                    <div class="h7-slider-wrap">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-7 order-0 order-lg-2">
                                <div class="h7-slider-img">
                                    <img src="img/slider/h7_slider_img03.png" alt="">
                                    <div class="product-tooltip" style="left: 26%; top: 20%;">
                                        <div class="tooltip-btn"></div>
                                        <div class="features-product-item product-tooltip-item">
                                            <div class="close-btn"><i class="flaticon-targeting-cross"></i></div>
                                            <div class="features-product-thumb">
                                                <a href="shop-details.html">
                                                    <img src="img/product/tooltip_product01.png" alt="">
                                                </a>
                                            </div>
                                            <div class="features-product-content">
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <h5><a href="shop-details.html">Exclusive Chair</a></h5>
                                                <p class="price">$45.00</p>
                                                <div class="features-product-bottom">
                                                    <ul>
                                                        <li class="color-option">
                                                            <span class="gray"></span>
                                                            <span class="cyan"></span>
                                                            <span class="orange"></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                        </div>
                                    </div>
                                    <div class="product-tooltip" style="right: 15%; top: 20%;">
                                        <div class="tooltip-btn"></div>
                                        <div class="features-product-item product-tooltip-item right">
                                            <div class="close-btn"><i class="flaticon-targeting-cross"></i></div>
                                            <div class="features-product-thumb">
                                                <a href="shop-details.html">
                                                    <img src="img/product/tooltip_product02.png" alt="">
                                                </a>
                                            </div>
                                            <div class="features-product-content">
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <h5><a href="shop-details.html">Exclusive Lamp</a></h5>
                                                <p class="price">$45.00</p>
                                                <div class="features-product-bottom">
                                                    <ul>
                                                        <li class="color-option">
                                                            <span class="gray"></span>
                                                            <span class="cyan"></span>
                                                            <span class="orange"></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5">
                                <div class="h7-slider-content">
                                    <span class="sub-title" data-animation-in="fadeInUpBig" data-delay-in=".2"
                                        data-duration-in="1.5">new arrival</span>
                                    <h2 class="title" data-animation-in="fadeInUpBig" data-delay-in=".4"
                                        data-duration-in="1.5">New Chair top deal <span>!</span></h2>
                                    <p data-animation-in="fadeInUpBig" data-delay-in=".6" data-duration-in="1.5">Get up to
                                        50% off Today Only</p>
                                    <a href="shop-sidebar.html" class="btn" data-animation-in="fadeInUpBig"
                                        data-delay-in=".8" data-duration-in="1.5">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider-area-end -->

    <!-- slider-bottom-product -->
    <section class="h7-slider-bottom-product pt-20">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-md-6">
                    <div class="h7s-bottom-item mb-20">
                        <img src="img/product/h7_slider_bottom01.jpg" alt="">
                        <div class="content">
                            <h5><a href="shop-sidebar.html">Similar Chair</a></h5>
                            <a href="shop-sidebar.html" class="btn">shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="h7s-bottom-item mb-20">
                        <img src="img/product/h7_slider_bottom02.jpg" alt="">
                        <div class="content">
                            <h5><a href="shop-sidebar.html">Indoor Tree</a></h5>
                            <a href="shop-sidebar.html" class="btn">shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="h7s-bottom-item mb-20">
                        <img src="img/product/h7_slider_bottom03.jpg" alt="">
                        <div class="content">
                            <h5><a href="shop-sidebar.html">Room Lamp</a></h5>
                            <a href="shop-sidebar.html" class="btn">shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="h7s-bottom-item mb-20">
                        <img src="img/product/h7_slider_bottom04.jpg" alt="">
                        <div class="content">
                            <h5><a href="shop-sidebar.html">Similar Chair</a></h5>
                            <a href="shop-sidebar.html" class="btn">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider-bottom-product-end -->

    <!-- cat-area -->
    <section class="category-area pt-80 pb-45">
        <div class="container">
            <div class="cat-title-line">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="cat-section-title text-center">
                            <div class="icon"><img src="img/icon/logo_icon.png" alt=""></div>
                            <span class="sub-title">CHOOSE A TYPE</span>
                            <h2 class="title">Online shopping defined by fashion <br> popular aesthetic expression at a
                                particular place
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <div class="shop-cat-item">
                        <a href="shop-sidebar.html">
                            <div class="icon">
                                <img src="img/icon/s_cat_icon01.png" alt="">
                            </div>
                            <p>King Sofa <span>( 9 Items )</span></p>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="shop-cat-item">
                        <a href="shop-sidebar.html">
                            <div class="icon">
                                <img src="img/icon/s_cat_icon02.png" alt="">
                            </div>
                            <p>Tv Shelf <span>( 8 Items )</span></p>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="shop-cat-item">
                        <a href="shop-sidebar.html">
                            <div class="icon">
                                <img src="img/icon/s_cat_icon03.png" alt="">
                            </div>
                            <p>Word Drop <span>( 12 Items )</span></p>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="shop-cat-item">
                        <a href="shop-sidebar.html">
                            <div class="icon">
                                <img src="img/icon/s_cat_icon04.png" alt="">
                            </div>
                            <p>Home Lamp <span>( 10 Items )</span></p>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="shop-cat-item">
                        <a href="shop-sidebar.html">
                            <div class="icon">
                                <img src="img/icon/s_cat_icon05.png" alt="">
                            </div>
                            <p>Indoor Plant <span>( 19 Items )</span></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cat-area-end -->

    <!-- trending-product-area -->
    <section class="trending-product-area trending-product-two gray-bg pt-95 pb-100">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6">
                    <div class="section-title title-style-two text-center mb-50">
                        <h3 class="title">Trending Products</h3>
                    </div>
                </div>
            </div>
            <div class="row no-gutters trending-product-grid">
                <div class="col-2">
                    <div class="trending-products-list">
                        <h5>Clothing</h5>
                        <ul class="nav nav-tabs" id="trendingTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="accessories-tab" data-toggle="tab" href="#accessories"
                                    role="tab" aria-controls="accessories" aria-selected="true">Accessories</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="bags-tab" data-toggle="tab" href="#bags" role="tab"
                                    aria-controls="bags" aria-selected="false">Beds</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="bSellers-tab" data-toggle="tab" href="#bSellers" role="tab"
                                    aria-controls="bSellers" aria-selected="false">Best Sellers</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="shirts-tab" data-toggle="tab" href="#shirts" role="tab"
                                    aria-controls="shirts" aria-selected="false">Bed Room</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="shoesTwo-tab" data-toggle="tab" href="#shoesTwo" role="tab"
                                    aria-controls="shoesTwo" aria-selected="false">Sofa Set</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="travelOut-tab" data-toggle="tab" href="#travelOut" role="tab"
                                    aria-controls="travelOut" aria-selected="false">Rocking Chair</a>
                            </li>
                        </ul>
                        <p class="offer"><a href="#">Limited-Time Offer!</a></p>
                    </div>
                </div>
                <div class="col-10">
                    <div class="tab-content tp-tab-content" id="trendingTabContent">
                        <div class="tab-pane show active" id="accessories" role="tabpanel"
                            aria-labelledby="accessories-tab">
                            <div class="trending-products-banner banner-animation">
                                <a href="shop-sidebar.html"><img src="img/images/f_trending_banner01.jpg" alt=""></a>
                            </div>
                            <div class="row trending-product-active">
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product01.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Women Shoes</a></h5>
                                            <p class="price">$67.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product02.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Exclusive Handbags</a></h5>
                                            <p class="price">$45.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product03.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Travelling Bags</a></h5>
                                            <p class="price">$29.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product04.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Winter Jackets</a></h5>
                                            <p class="price">$59.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product05.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Drawstring Sweatshirt</a></h5>
                                            <p class="price">$18.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product06.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Women sleeping dress</a></h5>
                                            <p class="price">$12.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="bags" role="tabpanel" aria-labelledby="bags-tab">
                            <div class="trending-products-banner banner-animation">
                                <a href="shop-sidebar.html"><img src="img/images/f_trending_banner02.jpg" alt=""></a>
                            </div>
                            <div class="row trending-product-active">
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product07.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Women Shoes</a></h5>
                                            <p class="price">$67.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product08.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Exclusive Handbags</a></h5>
                                            <p class="price">$45.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product03.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Travelling Bags</a></h5>
                                            <p class="price">$29.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product04.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Winter Jackets</a></h5>
                                            <p class="price">$59.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product02.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Drawstring Sweatshirt</a></h5>
                                            <p class="price">$18.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product07.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Women sleeping dress</a></h5>
                                            <p class="price">$12.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="bSellers" role="tabpanel" aria-labelledby="bSellers-tab">
                            <div class="trending-products-banner banner-animation">
                                <a href="shop-sidebar.html"><img src="img/images/f_trending_banner01.jpg" alt=""></a>
                            </div>
                            <div class="row trending-product-active">
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product03.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Women Shoes</a></h5>
                                            <p class="price">$67.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product04.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Exclusive Handbags</a></h5>
                                            <p class="price">$45.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product05.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Travelling Bags</a></h5>
                                            <p class="price">$29.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product08.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Winter Jackets</a></h5>
                                            <p class="price">$59.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product01.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Drawstring Sweatshirt</a></h5>
                                            <p class="price">$18.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product04.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Women sleeping dress</a></h5>
                                            <p class="price">$12.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="shirts" role="tabpanel" aria-labelledby="shirts-tab">
                            <div class="trending-products-banner banner-animation">
                                <a href="shop-sidebar.html"><img src="img/images/f_trending_banner02.jpg" alt=""></a>
                            </div>
                            <div class="row trending-product-active">
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product03.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Women Shoes</a></h5>
                                            <p class="price">$67.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product05.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Exclusive Handbags</a></h5>
                                            <p class="price">$45.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product07.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Travelling Bags</a></h5>
                                            <p class="price">$29.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product08.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Winter Jackets</a></h5>
                                            <p class="price">$59.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product01.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Drawstring Sweatshirt</a></h5>
                                            <p class="price">$18.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product05.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Women sleeping dress</a></h5>
                                            <p class="price">$12.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="shoesTwo" role="tabpanel" aria-labelledby="shoesTwo-tab">
                            <div class="trending-products-banner banner-animation">
                                <a href="shop-sidebar.html"><img src="img/images/f_trending_banner01.jpg" alt=""></a>
                            </div>
                            <div class="row trending-product-active">
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product07.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Women Shoes</a></h5>
                                            <p class="price">$67.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product04.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Exclusive Handbags</a></h5>
                                            <p class="price">$45.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product01.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Travelling Bags</a></h5>
                                            <p class="price">$29.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product04.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Winter Jackets</a></h5>
                                            <p class="price">$59.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product08.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Drawstring Sweatshirt</a></h5>
                                            <p class="price">$18.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product05.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Women sleeping dress</a></h5>
                                            <p class="price">$12.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="travelOut" role="tabpanel" aria-labelledby="travelOut-tab">
                            <div class="trending-products-banner banner-animation">
                                <a href="shop-sidebar.html"><img src="img/images/f_trending_banner02.jpg" alt=""></a>
                            </div>
                            <div class="row trending-product-active">
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product08.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Women Shoes</a></h5>
                                            <p class="price">$67.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product01.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Exclusive Handbags</a></h5>
                                            <p class="price">$45.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product03.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Travelling Bags</a></h5>
                                            <p class="price">$29.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product05.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Winter Jackets</a></h5>
                                            <p class="price">$59.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product07.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Drawstring Sweatshirt</a></h5>
                                            <p class="price">$18.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="features-product-item">
                                        <div class="features-product-thumb">
                                            <div class="discount-tag">-20%</div>
                                            <a href="shop-details.html">
                                                <img src="img/product/f_trending_product04.jpg" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-content">
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h5><a href="shop-details.html">Women sleeping dress</a></h5>
                                            <p class="price">$12.00</p>
                                            <div class="features-product-bottom">
                                                <ul>
                                                    <li class="color-option">
                                                        <span class="gray"></span>
                                                        <span class="cyan"></span>
                                                        <span class="orange"></span>
                                                    </li>
                                                    <li class="limited-time"><a href="#">Limited-Time Offer!</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="features-product-cart"><a href="cart.html">add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- trending-product-area-end -->

    <!-- new-arrival-area -->
    <section class="new-arrival-area home7-new-arrival pt-95 pb-50">
        <div class="container custom-container-two">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="section-title text-center text-lg-left mb-45">
                        <h3 class="title">New Arrival Collection</h3>
                    </div>
                    <div class="discount-end-time-wrap mb-50">
                        <img src="img/images/discount_end_img.jpg" alt="">
                        <div class="content">
                            <div class="icon">
                                <img src="{{asset('uploads/webinfo/'. $web_info->icon)}}" alt="">
                            </div>
                            <h2>Cyber Monday</h2>
                            <span>Super Offer TO 50% OFF</span>
                            <div class="coming-time" data-countdown="2021/9/21"></div>
                            <a href="shop-sidebar.html" class="btn">shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="row">
                        <div class="col-lg-9 col-md-8">
                            <div class="new-arrival-nav mb-35">
                                <button class="active" data-filter="*">Best Sellers</button>
                                <button class="" data-filter=".cat-one">New Products</button>
                                <button class="" data-filter=".cat-two">Sales Products</button>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 d-none d-md-block">
                            <div class="new-arrival-all">
                                <a href="shop.html"><i class="fas fa-arrows-alt"></i> view all</a>
                            </div>
                        </div>
                    </div>
                    <div class="row new-arrival-active">
                        <div class="col-xl-4 col-sm-6 grid-item grid-sizer cat-two">
                            <div class="new-arrival-item text-center mb-50">
                                <div class="thumb mb-25">
                                    <a href="shop-details.html"><img src="img/product/fn_arrival_product01.jpg" alt=""></a>
                                    <div class="product-overlay-action">
                                        <ul>
                                            <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                            <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5><a href="shop-details.html">Bomber in Cotton</a></h5>
                                    <span class="price">$37.00</span>
                                    <div class="rating">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 grid-item grid-sizer cat-one">
                            <div class="new-arrival-item text-center mb-50">
                                <div class="thumb mb-25">
                                    <div class="discount-tag">- 20%</div>
                                    <a href="shop-details.html"><img src="img/product/fn_arrival_product02.jpg" alt=""></a>
                                    <div class="product-overlay-action">
                                        <ul>
                                            <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                            <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5><a href="shop-details.html">Travelling Bags</a></h5>
                                    <span class="price">$25.00</span>
                                    <div class="rating">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 grid-item grid-sizer cat-two cat-one">
                            <div class="new-arrival-item text-center mb-50">
                                <div class="thumb mb-25">
                                    <a href="shop-details.html"><img src="img/product/fn_arrival_product03.jpg" alt=""></a>
                                    <div class="product-overlay-action">
                                        <ul>
                                            <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                            <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5><a href="shop-details.html">Exclusive Handbags</a></h5>
                                    <span class="price">$19.50</span>
                                    <div class="rating">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 grid-item grid-sizer cat-two">
                            <div class="new-arrival-item text-center mb-50">
                                <div class="thumb mb-25">
                                    <div class="discount-tag new">New</div>
                                    <a href="shop-details.html"><img src="img/product/fn_arrival_product04.jpg" alt=""></a>
                                    <div class="product-overlay-action">
                                        <ul>
                                            <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                            <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5><a href="shop-details.html">Women Shoes</a></h5>
                                    <span class="price">$12.90</span>
                                    <div class="rating">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 grid-item grid-sizer cat-one">
                            <div class="new-arrival-item text-center mb-50">
                                <div class="thumb mb-25">
                                    <div class="discount-tag">- 20%</div>
                                    <a href="shop-details.html"><img src="img/product/fn_arrival_product05.jpg" alt=""></a>
                                    <div class="product-overlay-action">
                                        <ul>
                                            <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                            <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5><a href="shop-details.html">Winter Jackets</a></h5>
                                    <span class="price">$49.90</span>
                                    <div class="rating">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 grid-item grid-sizer cat-two cat-one">
                            <div class="new-arrival-item text-center mb-50">
                                <div class="thumb mb-25">
                                    <div class="discount-tag new">New</div>
                                    <a href="shop-details.html"><img src="img/product/fn_arrival_product06.jpg" alt=""></a>
                                    <div class="product-overlay-action">
                                        <ul>
                                            <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                            <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5><a href="shop-details.html">Fashion Shoes</a></h5>
                                    <span class="price">$31.99</span>
                                    <div class="rating">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- new-arrival-area-end -->

    <!-- discount-area -->
    <section class="discount-area discount-bg-three" data-background="img/bg/discount_bg03.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-7 order-0 order-lg-2">
                    <div class="h7-discount-img">
                        <img src="img/images/h7_discount_img.png" alt="">
                        <div class="voucher-code">
                            <h6>super voucher</h6>
                            <span>QZ78ADARA</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="discount-content text-left">
                        <div class="icon mb-15"><img src="img/icon/s_discount_icon.png" alt=""></div>
                        <span>STOCK IS LIMITED</span>
                        <h2>Winter Collection Season Sale upto 30%</h2>
                        <a href="shop-sidebar.html" class="btn">shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- discount-area-end -->

    <!-- promo-services -->
    <section class="promo-services pt-80 pb-35">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="promo-services-item mb-40">
                        <div class="icon"><img src="img/icon/promo_icon01.png" alt=""></div>
                        <div class="content">
                            <h6>payment & delivery</h6>
                            <p>Delivered, when you receive arrives</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="promo-services-item mb-40">
                        <div class="icon"><img src="img/icon/promo_icon02.png" alt=""></div>
                        <div class="content">
                            <h6>Return Product</h6>
                            <p>Retail, a Product Return Process</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="promo-services-item mb-40">
                        <div class="icon"><img src="img/icon/promo_icon03.png" alt=""></div>
                        <div class="content">
                            <h6>money back guarantee</h6>
                            <p>Options Including 24/7</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="promo-services-item mb-40">
                        <div class="icon"><img src="img/icon/promo_icon04.png" alt=""></div>
                        <div class="content">
                            <h6>Quality support</h6>
                            <p>Support Options Including 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- promo-services-end -->

    <!-- brand-area -->
    <div class="brand-area gray-light-bg pt-100 pb-100">
        <div class="container custom-container-two">
            <div class="row brand-active">
                <div class="col">
                    <div class="brand-item">
                        <a href="#"><img src="img/brand/brand_item01.png" alt=""></a>
                    </div>
                </div>
                <div class="col">
                    <div class="brand-item">
                        <a href="#"><img src="img/brand/brand_item02.png" alt=""></a>
                    </div>
                </div>
                <div class="col">
                    <div class="brand-item">
                        <a href="#"><img src="img/brand/brand_item03.png" alt=""></a>
                    </div>
                </div>
                <div class="col">
                    <div class="brand-item">
                        <a href="#"><img src="img/brand/brand_item04.png" alt=""></a>
                    </div>
                </div>
                <div class="col">
                    <div class="brand-item">
                        <a href="#"><img src="img/brand/brand_item05.png" alt=""></a>
                    </div>
                </div>
                <div class="col">
                    <div class="brand-item">
                        <a href="#"><img src="img/brand/brand_item06.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->
@endsection