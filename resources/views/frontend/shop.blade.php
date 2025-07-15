@extends('frontend.master')
@section('style')
    <style>
        .brand_select::before{
            background: #ff6000;
            border-color: #ff6000;
        }
    </style>
@endsection
@section('content')
    <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" @php
            $photo_path = public_path('uploads/shop_page/' . $shop_banner->photo);
        @endphp @if ($shop_banner->photo && file_exists($photo_path))
            data-background="{{asset('uploads/shop_page/' . $shop_banner->photo)}}" @else
            data-background="img/bg/breadcrumb_bg01.jpg" @endif>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2>{{$shop_banner->title}}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <!-- breadcrumb-area-end -->

            <!-- shop-area -->
            <section class="shop-area pt-95 pb-100">
                <div class="container">
                    <div class="shop-top-meta mb-35">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="shop-top-left">
                                        <ul>
                                            <li><a href="#"><i class="flaticon-menu"></i> FILTER</a></li>
                                            <li>Totoal product {{$products->count()}}</li>
                                        </ul>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="shop-top-right">
                                    <form action="#">
                                        <select name="select">
                                            <option value="">Sort by newness</option>
                                            <option>Free Shipping</option>
                                            <option>Best Match</option>
                                            <option>Newest Item</option>
                                            <option>Size A - Z</option>
                                        </select>
                                    </form>
                                    <div class="shop-search">
                                        <div class="widget side-search-bar">
                                <form> 
                                    <input type="text" id="search_input2" placeholder="Search..." value="{{@$_GET['search_input']}}">
                                    <button type="submit" class="search_btn2"><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @forelse ($products as $product)
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="new-arrival-item text-center mb-50">
                                        <div class="thumb mb-25">
                                            @if ($product->discount)
                                                <div class="discount-tag">- {{$product->discount}}%</div>
                                            @endif
                                            <a href="{{ route('shopdetails', $product->slug)}}">
                                                <img src="{{asset('uploads/product/preview/' . $product->preview)}}"
                                                    style="width: 296px; height: 344px; object-fit: cover;" alt="">
                                            </a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="{{ route('shopdetails', $product->slug)}}"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="content">
                                            @if (strlen($product->product_name) > 30)
                                            <h5><a href="{{ route('shopdetails', $product->slug)}}">
                                                {{substr($product->product_name , 0 , 30) . '..'}}
                                                </a></h5>
                                            @else
                                            <h5><a href="{{ route('shopdetails', $product->slug)}}">{{$product->product_name}}</a></h5>
                                            @endif
                                            <span class="price">&#2547; {{$product->after_discount}}</span>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                    <div class="text-center " style="width: 100%">
                                        <h4 class="text-danger text-center">No Product Available</h4>
                                    </div>
                                </div>
                            @endforelse
                    </div>
                     @if ($products->total() > $products->perPage())
                            <div class="pagination-wrap">
                            <ul>
                                @if ($products->onFirstPage())
                                    <li class="prev disabled"><span>Prev</span></li>
                                @else
                                    <li class="prev"><a href="{{$products->previousPageUrl()}}">Prev</a></li>
                                @endif
                                
                                @for ($i = 1; $i <= $products->lastPage(); $i++)
                                    @if ($i == $products->currentPage())
                                        <li class="active"><a href="#">{{ $i }}</a></li>
                                    @else
                                        <li><a href="{{ $products->url($i) }}">{{ $i }}</a></li>
                                    @endif
                                @endfor

                                @if ($products->hasMorePages())
                                    <li class="next"><a href="{{$products->nextPageUrl()}}">Next</a></li>
                                @else
                                    <li class="next disabled"><span>Next</span></li>
                                @endif
                                
                            </ul>
                        </div>
                        @endif
                </div>
            </section>
            <!-- shop-area-end -->

        </main>
        <!-- main-area-end -->
@endsection

@section('footer_script')
    <script>
        $('.search_btn2').click(function(e){
            e.preventDefault();
            var search_input =  $('#search_input2').val();
            var link = "{{route('shop')}}"+"?search_input="+search_input;
            window.location.href = link;
        })
    </script>
@endsection