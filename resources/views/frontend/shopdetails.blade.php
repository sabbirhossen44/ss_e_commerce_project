@extends('frontend.master')
@section('style')
    <style>
        .shop-size-list ul li .button {
            display: block;
            width: 40px;
            height: 34px;
            line-height: 28px;
            text-align: center;
            border: 3px solid #ebebeb;
            font-size: 14px;
            color: #544842;
            font-family: 'Jost', sans-serif;
        }

        .shop-size-list ul li .button:hover {
            background: rgb(255, 96, 0);
            border-color: rgb(255, 96, 0);
        }
    </style>
@endsection
@section('content')
    <!-- main-area -->
    <main style="margin-top: 80px">

        <!-- breadcrumb-area -->
        <div class="breadcrumb-area breadcrumb-style-two"
            data-background="{{asset('frontend/img/bg/s_breadcrumb_bg01.jpg')}}">
            <div class="container">
                <div class="row">
                    {{-- <div class="col-lg-3 d-none d-lg-block">
                        <div class="previous-product">
                            <a href="shop-details.html"><i class="fas fa-angle-left"></i> previous product</a>
                        </div>
                    </div> --}}
                    <div class="col-lg-12 ms-auto">
                        <div class="breadcrumb-content">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                    @foreach (Request::segments() as $segment)
                                        <li class="breadcrumb-item">{{ucwords($segment)}}</li>
                                    @endforeach
                                </ol>
                            </nav>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 d-none d-lg-block">
                        <div class="next-product">
                            <a href="shop-details.html">Next product <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- shop-details-area -->
        <section class="shop-details-area pt-100 pb-95">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="shop-details-flex-wrap">
                            <div class="shop-details-nav-wrap">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    @foreach (App\Models\ProductGallery::where('product_id', $product->id)->get() as $galleryimg)
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="item-one-tab" data-toggle="tab" href="#item-one"
                                                role="tab" aria-controls="item-one" aria-selected="true"><img
                                                    src="{{asset('uploads/product/productgallery/' . $galleryimg->gallery)}}"
                                                    style="" alt=""></a>
                                        </li>
                                    @endforeach
                                    {{-- <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="item-one-tab" data-toggle="tab" href="#item-one"
                                            role="tab" aria-controls="item-one" aria-selected="true"><img
                                                src="{{asset('frontend/img/product/sd_nav_img01.jpg')}}" style=""
                                                alt=""></a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="item-two-tab" data-toggle="tab" href="#item-two" role="tab"
                                            aria-controls="item-two" aria-selected="false"><img
                                                src="{{asset('frontend/img/product/sd_nav_img02.jpg')}}" alt=""></a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="item-three-tab" data-toggle="tab" href="#item-three"
                                            role="tab" aria-controls="item-three" aria-selected="false"><img
                                                src="img/product/sd_nav_img03.jpg" alt=""></a>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="shop-details-img-wrap">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="item-one" role="tabpanel"
                                        aria-labelledby="item-two-tab" aria-labelledby="item-one-tab">
                                        <div class="shop-details-img">
                                            <img src="{{asset('uploads/product/preview/' . $product->preview)}}" alt="">
                                        </div>
                                    </div>
                                    {{-- <div class="tab-pane fade" id="item-two" role="tabpanel"
                                        aria-labelledby="item-two-tab">
                                        <div class="shop-details-img">
                                            <img src="img/product/shop_details_img02.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="item-three" role="tabpanel"
                                        aria-labelledby="item-three-tab">
                                        <div class="shop-details-img">
                                            <img src="img/product/shop_details_img03.jpg" alt="">
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="shop-details-content">
                            <a href="#" class="product-cat">{{$product->product_name}}</a>
                            <h3 class="title">{{$product->short_desc}}</h3>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="style-name">Style Name : TN-WI56-OMTJ-CqTKJ-09#</p>
                            <div class="price">Price : &#2547; {{$product->after_discount}}</div>
                            <div class="product-details-info">
                                <div class="sidebar-product-color mb-30">
                                    <h4 class="widget-title">Color</h4>
                                    <div class="shop-color-list">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>

                                <span>Size <a href="#">Guide</a></span>
                                <div class="sidebar-product-size ">
                                    <h4 class="widget-title">Product Size</h4>
                                    <div class="shop-size-list">
                                        <ul>
                                            @foreach ($sizes as $size)
                                                <li><button class="button" value="{{$size->id}}">{{$size->size_name}}</button>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="perched-info">
                                <div class="cart-plus-minus">
                                    <form action="#" class="num-block">
                                        <input type="text" class="in-num" value="1" readonly="">
                                        <div class="qtybutton-box">
                                            <span class="plus"><img src="{{asset('frontend/img/icon/plus.png')}}" alt=""></span>
                                            <span class="minus dis"><img src="{{asset('frontend/img/icon/minus.png')}}" alt=""></span>
                                        </div>
                                    </form>
                                </div>
                                <a href="#" class="btn">add to cart</a>
                                <div class="wishlist-compare">
                                    <ul>
                                        <li><a href="#"><i class="far fa-heart"></i> Add to Wishlist</a></li>
                                        <li><a href="#"><i class="fas fa-retweet"></i> Add to Compare List</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details-share">
                                <ul>
                                    <li>Share :</li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-desc-wrap">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description"
                                        role="tab" aria-controls="description" aria-selected="true">Description Guide</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab"
                                        aria-controls="reviews" aria-selected="false">Reviews</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="description" role="tabpanel"
                                    aria-labelledby="description-tab">
                                     {!!$product->long_desc!!}
                                </div>
                                
                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                    <div class="product-desc-title mb-30">
                                        <h4 class="title">Reviews (0) :</h4>
                                    </div>
                                    <p>Your email address will not be published. Required fields are marked</p>
                                    <p class="adara-review-title">Be the first to review “Adara”</p>
                                    <div class="review-rating">
                                        <span>Your rating *</span>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <form action="#" class="comment-form review-form">
                                        <span>Your review *</span>
                                        <textarea name="message" id="comment-message" placeholder="Your Comment"></textarea>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Your Name*">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" placeholder="Your Email*">
                                            </div>
                                        </div>
                                        <div class="comment-check-box">
                                            <input type="checkbox" id="comment-check">
                                            <label for="comment-check">Save my name and email in this browser for the next
                                                time I comment.</label>
                                        </div>
                                        <button class="btn">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="related-product-wrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="related-product-title">
                                <h4 class="title">You May Also Like...</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row related-product-active">
                        <div class="col-xl-3">
                            <div class="new-arrival-item text-center">
                                <div class="thumb mb-25">
                                    <a href="shop-details.html"><img src="img/product/n_arrival_product01.jpg" alt=""></a>
                                    <div class="product-overlay-action">
                                        <ul>
                                            <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                            <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5><a href="shop-details.html">Bomber in Cotton</a></h5>
                                    <span class="price">$37.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="new-arrival-item text-center">
                                <div class="thumb mb-25">
                                    <div class="discount-tag">- 20%</div>
                                    <a href="shop-details.html"><img src="img/product/n_arrival_product02.jpg" alt=""></a>
                                    <div class="product-overlay-action">
                                        <ul>
                                            <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                            <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5><a href="shop-details.html">Travelling Bags</a></h5>
                                    <span class="price">$25.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="new-arrival-item text-center">
                                <div class="thumb mb-25">
                                    <a href="shop-details.html"><img src="img/product/n_arrival_product03.jpg" alt=""></a>
                                    <div class="product-overlay-action">
                                        <ul>
                                            <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                            <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5><a href="shop-details.html">Exclusive Handbags</a></h5>
                                    <span class="price">$19.50</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="new-arrival-item text-center">
                                <div class="thumb mb-25">
                                    <div class="discount-tag new">New</div>
                                    <a href="shop-details.html"><img src="img/product/n_arrival_product04.jpg" alt=""></a>
                                    <div class="product-overlay-action">
                                        <ul>
                                            <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                            <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5><a href="shop-details.html">Women Shoes</a></h5>
                                    <span class="price">$12.90</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-details-area-end -->

    </main>
    <!-- main-area-end -->
@endsection