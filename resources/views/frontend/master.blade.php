
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        @foreach (Request::segments() as $segment)
            SH-Shop - {{ucwords($segment)}}
        @endforeach
        {{-- <title>Adara - Modern & Multipurpose eCommerce Template</title> --}}
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/jarallax.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>

        @php
            $web_info = App\Models\WebInfo::where('status', 1)->first();
        @endphp


        <!-- preloader  -->
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                </div>
                <div class="loader">
                    <div class="row">
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header class="header-style-six">
            <div class="header-top-wrap d-none d-md-block">
                <div class="container custom-container-two">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-sm-6">
                            <div class="header-top-link">
                                <ul>
                                    <li><a href="about-us.html">About US</a></li>
                                    <li><a href="#">FAQS</a></li>
                                    <li><a href="tel:{{$web_info->number_link}}">PH {{$web_info->number}}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="header-top-right">
                                <div class="lang">
                                    <select name="select">
                                        <option value="">English</option>
                                        <option value="">Spanish</option>
                                        <option value="">Turkish</option>
                                        <option value="">Russian</option>
                                        <option value="">Chinese</option>
                                    </select>
                                </div>
                                <div class="currency">
                                    <form action="#">
                                        <select name="select">
                                            <option value="">USD</option>
                                            <option value="">AUE</option>
                                            <option value="">SAR</option>
                                            <option value="">INR</option>
                                            <option value="">BDT</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header menu-area transparent-header">
                <div class="container custom-container-two">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo">
                                        <a href="{{route('home')}}">
                                            <img src="{{asset('uploads/webinfo/'.$web_info->logo)}}" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="active menu-item-has-children has--mega--menu"><a href="#">Home</a>
                                            </li>
                                            <li class="has--mega--menu"><a href="#">Shop</a>
                                                <ul class="mega-menu">
                                                    <li class="mega-menu-wrap">
                                                        <ul class="mega-menu-col">
                                                            <li class="mega-title"><a href="shop.html">SHOP PAGES</a></li>
                                                            <li><a href="shop-sidebar.html">Right Sidebar</a></li>
                                                            <li><a href="shop-sidebar.html">Left Sidebar</a></li>
                                                            <li><a href="shop.html">Hidden sidebar</a></li>
                                                            <li><a href="shop.html">Filters area</a></li>
                                                            <li><a href="shop-details.html">Shop Details</a></li>
                                                            <li><a href="cart.html">Cart Page</a></li>
                                                            <li><a href="checkout.html">Checkout Page</a></li>
                                                        </ul>
                                                        <ul class="mega-menu-col">
                                                            <li class="mega-title"><a href="#">FEATURES</a></li>
                                                            <li><a href="shop-sidebar.html">Variable Product</a></li>
                                                            <li><a href="shop-sidebar.html">External Product</a></li>
                                                            <li><a href="shop-sidebar.html">Other Shop Pages</a></li>
                                                            <li><a href="shop-sidebar.html">Categories</a></li>
                                                            <li><a href="shop-sidebar.html">Collection</a></li>
                                                            <li><a href="shop-sidebar.html">LookBook</a></li>
                                                            <li><a href="cart.html">Shopping Cart</a></li>
                                                        </ul>
                                                        <ul class="mega-menu-col sub-cat-post">
                                                            <li>
                                                                <a href="shop-sidebar.html">
                                                                    <img src="img/product/sub_menu_img01.jpg" alt="">
                                                                    <span class="btn">Man Shop</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <ul class="mega-menu-col sub-cat-post">
                                                            <li>
                                                                <a href="shop-sidebar.html">
                                                                    <img src="img/product/sub_menu_img02.jpg" alt="">
                                                                    <span class="btn">Women’s Shop</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li class="menu-item-has-children"><a href="#">blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Our Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <li class="header-search"><a href="#" data-toggle="modal"
                                                    data-target="#search-modal"><i class="flaticon-search"></i></a></li>
                                            <li class="header-profile"><a href="#"><i class="flaticon-user"></i></a></li>
                                            <li class="header-wishlist"><a href="#"><i class="flaticon-heart-shape-outline"></i></a></li>
                                            <li class="header-shop-cart"><a href="#"><i class="flaticon-shopping-bag"></i><span>0</span></a>
                                                <ul class="minicart">
                                                    <li class="d-flex align-items-start">
                                                        <div class="cart-img">
                                                            <a href="#"><img src="img/product/cart_p01.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-content">
                                                            <h4><a href="#">Exclusive Winter Jackets</a></h4>
                                                            <div class="cart-price">
                                                                <span class="new">$229.9</span>
                                                                <span><del>$229.9</del></span>
                                                            </div>
                                                        </div>
                                                        <div class="del-icon">
                                                            <a href="#"><i class="far fa-trash-alt"></i></a>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-start">
                                                        <div class="cart-img">
                                                            <a href="#"><img src="img/product/cart_p02.jpg" alt=""></a>
                                                        </div>
                                                        <div class="cart-content">
                                                            <h4><a href="#">Winter Jackets For Women</a></h4>
                                                            <div class="cart-price">
                                                                <span class="new">$229.9</span>
                                                                <span><del>$229.9</del></span>
                                                            </div>
                                                        </div>
                                                        <div class="del-icon">
                                                            <a href="#"><i class="far fa-trash-alt"></i></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="total-price">
                                                            <span class="f-left">Total:</span>
                                                            <span class="f-right">$239.9</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkout-link">
                                                            <a href="#">Shopping Cart</a>
                                                            <a class="black-color" href="#">Checkout</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-toggle-btn"><a href="#" class="navSidebar-button"><i class="flaticon-menu-button-of-three-horizontal-lines"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="close-btn"><i class="flaticon-targeting-cross"></i></div>
                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="index.html"><img src="img/logo/logo.png" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <ul class="navigation">
                                            <li class="active "><a href="{{route('home')}}">Home</a></li>
                                            <li class="menu-item-has-children"><a href="#">Shop</a>
                                                <ul class="submenu">
                                                    <li><a href="shop.html">Shop Page</a></li>
                                                    <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                                    <li><a href="shop-details.html">Shop Details</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="cart.html">Checkout Page</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li class="menu-item-has-children"><a href="#">blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Our Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Search -->
            <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form>
                            <input type="text" placeholder="Search here...">
                            <button><i class="flaticon-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Search-end -->

            <!-- off-canvas-start -->
            <div class="sidebar-off-canvas info-group">
                <div class="off-canvas-overlay"></div>
                <div class="off-canvas-widget scroll">
                    <div class="sidebar-widget-container">
                        <div class="off-canvas-heading">
                            <a href="#" class="close-side-widget">
                                <span class="flaticon-targeting-cross"></span>
                            </a>
                        </div>
                        <div class="sidebar-textwidget">
                            <div class="sidebar-info-contents">
                                <div class="content-inner">
                                    <div class="logo mb-30">
                                        <a href="{{route('home')}}">
                                            <img src="{{asset('uploads/webinfo/'.$web_info->logo)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="content-box">
                                        <p>{{$web_info->title}}</p>
                                    </div>
                                    <div class="contact-info">
                                        <h4 class="title">CONTACT US</h4>
                                        <ul>
                                            <li><span class="flaticon-phone-call"></span><a href="tel:{{$web_info->number_link}}">{{$web_info->number}}</a></li>
                                            <li><span class="flaticon-email"></span><a
                                                    href="mailto:{{$web_info->email}}">{{$web_info->email}}</a></li>
                                            <li><span class="flaticon-place"></span>{{$web_info->address}}</li>
                                        </ul>
                                    </div>
                                    <div class="oc-newsletter">
                                        <h4 class="title">NEWSLETTER</h4>
                                        <p>Fill your email below to subscribe to my newsletter</p>
                                        <form action="#">
                                            <input type="email" placeholder="Email...">
                                            <button class="btn">Subscribe</button>
                                        </form>
                                    </div>
                                    <div class="oc-social">
                                        <ul>
                                            <li><a href="{{$web_info->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="{{$web_info->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="{{$web_info->youtube}}"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="{{$web_info->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="{{$web_info->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="oc-bottom">
                                        <div class="currency">
                                            <form action="#">
                                                <label>Currency</label>
                                                <select name="select">
                                                    <option value="">USD</option>
                                                    <option value="">AUE</option>
                                                    <option value="">SAR</option>
                                                    <option value="">INR</option>
                                                    <option value="">BDT</option>
                                                </select>
                                            </form>
                                        </div>
                                        <div class="language">
                                            <form action="#">
                                                <label>Language</label>
                                                <select name="select">
                                                    <option value="">English</option>
                                                    <option value="">Spanish</option>
                                                    <option value="">Turkish</option>
                                                    <option value="">Russian</option>
                                                    <option value="">Chinese</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- off-canvas-end -->

        </header>
        <!-- header-area-end -->

        <!-- main-area -->
        <main>
            @yield('content')
        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
        <footer class="footer-style-two pt-75">
            <div class="container">
                <div class="footer-top-wrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-logo">
                                <a href="{{route('home')}}"><img src="{{asset('uploads/webinfo/'. $web_info->logo)}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-middle-wrap pt-45 pb-20">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <h4 class="fw-title">COMPANY</h4>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="shop.html">Store Locations</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <h4 class="fw-title">STORE</h4>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="#">Order Tracking</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <h4 class="fw-title">Category</h4>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="shop-sidebar.html">Women</a></li>
                                        <li><a href="shop-sidebar.html">Men</a></li>
                                        <li><a href="shop-sidebar.html">Baby</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <h4 class="fw-title">FOLLOW US</h4>
                                <div class="footer-text">
                                    <p>Get Free Shipping on all your orders!</p>
                                    <div class="footer-social">
                                        <ul>
                                            <li><a href="{{$web_info->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="{{$web_info->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="{{$web_info->youtube}}"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="{{$web_info->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="{{$web_info->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap gray-light-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="copyright-text">
                                <p>&copy; 2025 <a href="{{route('home')}}">Sabbir Hossen</a>. All Rights Reserved | Ph {{$web_info->number}}</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="pay-method-img">
                                <img src="img/images/payment_method_img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->





		<!-- JS here -->
        <script src="js/vendor/jquery-3.5.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/swiper-bundle.min.js"></script>
        <script src="js/jarallax.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/nav-tool.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
