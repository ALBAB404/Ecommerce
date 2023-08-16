
 <!DOCTYPE html>
 <html lang="en">

 <head>

    @include('frontend.includes.head')

    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/responsive.css" />

    <!-- Background css -->
    <link rel="stylesheet" id="bg-switcher-css" href="{{ asset('frontend') }}/assets/css/backgrounds/bg-4.css">

</head>
<body class="shop_page">

    <!-- Header start  -->
    @include('frontend.includes.header')
   <!-- Header End  -->

    <!-- ekka Cart Start -->
    <div class="ec-side-cart-overlay"></div>
    <div id="ec-side-cart" class="ec-side-cart">
        <div class="ec-cart-inner">
            <div class="ec-cart-top">
                <div class="ec-cart-title">
                    <span class="cart_title">My Cart</span>
                    <button class="ec-close">×</button>
                </div>
                <ul class="eccart-pro-items">
                    <li>
                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                src="{{ asset('frontend') }}/assets/images/product-image/6_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">T-shirt For Women</a>
                            <span class="cart-price"><span>$76.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                src="{{ asset('frontend') }}/assets/images/product-image/12_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Women Leather Shoes</a>
                            <span class="cart-price"><span>$64.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                src="{{ asset('frontend') }}/assets/images/product-image/3_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Girls Nylon Purse</a>
                            <span class="cart-price"><span>$59.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="ec-cart-bottom">
                <div class="cart-sub-total">
                    <table class="table cart-table">
                        <tbody>
                            <tr>
                                <td class="text-left">Sub-Total :</td>
                                <td class="text-right">$300.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">VAT (20%) :</td>
                                <td class="text-right">$60.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Total :</td>
                                <td class="text-right primary-color">$360.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn">
                    <a href="cart.html" class="btn btn-primary">View Cart</a>
                    <a href="checkout.html" class="btn btn-secondary">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ekka Cart End -->

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Shop</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Shop</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec Shop page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-shop-rightside col-lg-9 col-md-12 order-lg-last order-md-first margin-b-30">
                    <!-- Shop Top Start -->
                    <div class="ec-pro-list-top d-flex">
                        <div class="col-md-2 ec-grid-list">
                            <div class="ec-gl-btn">
                                <button class="btn btn-grid active"><img src="{{ asset('frontend') }}/assets/images/icons/grid.svg"
                                        class="svg_img gl_svg" alt="" /></button>
                                <button class="btn btn-list"><img src="{{ asset('frontend') }}/assets/images/icons/list.svg"
                                        class="svg_img gl_svg" alt="" /></button>
                            </div>
                        </div>
                        <div class="col-md-6 ec-search">
                            <form class="search-form" action="">
                                <input type="text" id="myInput" placeholder="Search products...">
                            </form>
                        </div>
                        <div class="col-md-4 ec-sort-select">
                            <span class="sort-by">Sort by</span>
                            <div class="ec-select-inner">
                                <select name="ec-select" id="ec-select">
                                    <option selected disabled>Position</option>
                                    <option value="1">Featured Product</option>
                                    <option value="2">New Arrivals</option>
                                    <option value="3">Latest Product</option>
                                    <option value="4">Tranding Product</option>
                                    <option value="5">Top Rated Product</option>
                                    <option value="6">Price, low to high</option>
                                    <option value="7">Price, high to low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Top End -->

                    <!-- Shop content Start -->
                    <div class="shop-pro-content">
                        <div class="shop-pro-inner">
                            <div class="row" id="productContainer">
                                @foreach ($products as $product)
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ route('ActiveProduct', $product->slug) }}">
                                                    <div class="image">
                                                        <img class="main-image"
                                                            src="{{ asset($product->productInfo->image) }}" alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{ asset($product->productInfo->image) }}" alt="Product" />
                                                    </div>
                                                </a>
                                                {{-- <span class="percentage">20%</span> --}}
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#modal{{ $product->id }}"><img
                                                        src="{{ asset('frontend/assets/images/icons/quickview.svg') }}" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('frontend/assets/images/icons/compare.svg') }}"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" id="addToCart" data-id="{{ $product->id }}" class="add-to-cart"><img
                                                            src="{{ asset('frontend/assets/images/icons/cart.svg') }}" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('frontend') }}/assets/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- quick view modal start --}}
                                            <div class="modal fade" id="modal{{ $product->id }}" tabindex="-1" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-5 col-sm-12 col-xs-12">
                                                                    <!-- Swiper -->
                                                                    <div class="qty-product-cover">
                                                                        @foreach ($product->productSlider as $sliderImage)
                                                                        <div class="qty-slide">
                                                                            <img class="img-responsive" src="{{ asset($sliderImage->image) }}" alt="">
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                                    <div class="qty-nav-thumb">
                                                                        @foreach ($product->productSlider as $sliderImage)
                                                                        <div class="qty-slide">
                                                                            <img class="img-responsive" src="{{ asset($sliderImage->image) }}" alt="">
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 col-sm-12 col-xs-12">
                                                                    <div class="quickview-pro-content">
                                                                        <h5 class="ec-quick-title"><a href="product-left-sidebar.html">Mens Winter Leathers Jackets</a></h5>
                                                                        <div class="ec-quickview-rating">
                                                                            <i class="ecicon eci-star fill"></i>
                                                                            <i class="ecicon eci-star fill"></i>
                                                                            <i class="ecicon eci-star fill"></i>
                                                                            <i class="ecicon eci-star fill"></i>
                                                                            <i class="ecicon eci-star"></i>
                                                                        </div>

                                                                        <div class="ec-quickview-desc">Lorem Ipsum is simply dummy text of the printing and
                                                                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                                            since the 1500s,</div>
                                                                        <div class="ec-quickview-price">
                                                                            <span class="new-price">$199.00</span>
                                                                            <span class="old-price">$200.00</span>
                                                                        </div>

                                                                        <div class="ec-pro-variation">
                                                                            <div class="ec-pro-variation-inner ec-pro-variation-size">
                                                                                <span>Size</span>
                                                                                <div class="ec-pro-variation-content">
                                                                                    <ul>
                                                                                        <li><span>250 g</span></li>
                                                                                        <li><span>500 g</span></li>
                                                                                        <li><span>1 kg</span></li>
                                                                                        <li><span>2 kg</span></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ec-quickview-qty">
                                                                            <div class="qty-plus-minus">
                                                                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                                                            </div>
                                                                            <div class="ec-quickview-cart ">
                                                                                <button class="btn btn-primary">Add To Cart</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                       {{-- quick view modal end --}}

                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">{{ $product->name }}</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">{!! $product->short_des !!}</div>
                                            <span class="ec-price">
                                                <span class="old-price">${{ $product->productInfo->price }}.00</span>
                                                <span class="new-price">${{ $product->productInfo->sell_price }}.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/6_1.jpg"
                                                                data-src-hover="assets/images/product-image/6_1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#e8c2ff;">{{ $product->color->title }}</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$25.00" data-new="$20.00"
                                                                data-tooltip="Small">{{ $product->size->title }}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <!-- Ec Pagination Start -->
                        <div class="ec-pro-pagination">
                            <span>Showing 1-12 of 21 item(s)</span>
                            {{ $products->links() }}
                        </div>
                        <!-- Ec Pagination End -->
                    </div>
                    <!--Shop content End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="ec-shop-leftside col-lg-3 col-md-12 order-lg-first order-md-last">
                    <div id="shop_sidebar">
                        <div class="ec-sidebar-heading">
                            <h1>Filter Products By</h1>
                        </div>
                        <div class="ec-sidebar-wrap">
                            <!-- Sidebar Category Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Category</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <ul>
                                        @foreach ($categories as $category)
                                        <li>
                                            <div class="ec-sidebar-block-item ">
                                                <input type="checkbox" class="categoryChecked" value="{{ $category->id }}" /> <a href="#">{{ $category->title }}</a><span
                                                    class="checked"></span>
                                            </div>
                                        </li>
                                        @endforeach



                                        {{-- <li id="ec-more-toggle-content" style="padding: 0; display: none;">
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-block-item">
                                                        <input type="checkbox" /> <a href="#">Watch</a><span
                                                            class="checked"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-block-item">
                                                        <input type="checkbox" /> <a href="#">Cap</a><span
                                                            class="checked"></span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item ec-more-toggle">
                                                <span class="checked"></span><span id="ec-more-toggle">More
                                                    Categories</span>
                                            </div>
                                        </li> --}}

                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Size Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Size</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <ul>
                                        @foreach ($sizes as $size)
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" class="sizeChecked" value="{{ $size->id }}" /><a href="#">{{ $size->title }}</a><span
                                                    class="checked"></span>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Color item -->
                            {{-- <div class="ec-sidebar-block ec-sidebar-block-clr">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Color</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <ul>
                                        @foreach ($colors as $color)
                                        <li>{{ $color->title }}
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div> --}}
                            <!-- Sidebar Price Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Price</h3>
                                </div>
                                <div class="ec-sb-block-content es-price-slider">
                                    <div class="ec-price-filter">
                                        <div id="ec-sliderPrice" class="filter__slider-price" data-min="0" data-max="1050" data-step="10"></div>
                                        <div class="ec-price-input">
                                            <label class="filter__label"><input type="text" class="filter__input lowPrice"></label>
                                            <span class="ec-price-divider"></span>
                                            <label class="filter__label"><input type="text" class="filter__input highPrice"></label>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                       <button id="getPriceValuesButton" class="btn btn-sm btn-info mt-2 text-white">Get Price</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop page -->

    <!-- Footer Start -->
    <footer class="ec-footer section-space-mt">
        <div class="footer-container">
            <div class="footer-offer">
                <div class="container">
                    <div class="row">
                        <div class="text-center footer-off-msg">
                            <span>Win a contest! Get this limited-editon</span><a href="#" target="_blank">View
                                Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-top section-space-footer-p">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-3 ec-footer-contact">
                            <div class="ec-footer-widget">
                                <div class="ec-footer-logo"><a href="#"><img src="{{ asset('frontend') }}/assets/images/logo/footer-logo.png"
                                            alt=""><img class="dark-footer-logo" src="{{ asset('frontend') }}/assets/images/logo/dark-logo.png"
                                            alt="Site Logo" style="display: none;" /></a></div>
                                <h4 class="ec-footer-heading">Contact us</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link">71 Pilgrim Avenue Chevy Chase, east california.</li>
                                        <li class="ec-footer-link"><span>Call Us:</span><a href="tel:+440123456789">+44
                                                0123 456 789</a></li>
                                        <li class="ec-footer-link"><span>Email:</span><a
                                                href="mailto:example@ec-email.com">+example@ec-email.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-info">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Information</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="about-us.html">About us</a></li>
                                        <li class="ec-footer-link"><a href="faq.html">FAQ</a></li>
                                        <li class="ec-footer-link"><a href="#">Delivery Information</a></li>
                                        <li class="ec-footer-link"><a href="contact-us.html">Contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-account">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Account</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">My Account</a></li>
                                        <li class="ec-footer-link"><a href="track-order.html">Order History</a></li>
                                        <li class="ec-footer-link"><a href="#">Wish List</a></li>
                                        <li class="ec-footer-link"><a href="#">Specials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-service">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Services</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">Discount Returns</a></li>
                                        <li class="ec-footer-link"><a href="#">Policy & policy </a></li>
                                        <li class="ec-footer-link"><a href="#">Customer Service</a></li>
                                        <li class="ec-footer-link"><a href="terms-condition.html">Term & condition</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-news">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Newsletter</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link">Get instant updates about our new products and
                                            special promos!</li>
                                    </ul>
                                    <div class="ec-subscribe-form">
                                        <form id="ec-newsletter-form" name="ec-newsletter-form" method="post"
                                            action="#">
                                            <div id="ec_news_signup" class="ec-form">
                                                <input class="ec-email" type="email" required=""
                                                    placeholder="Enter your email here..." name="ec-email" value="" />
                                                <button id="ec-news-btn" class="button btn-primary" type="submit"
                                                    name="subscribe" value=""><i class="ecicon eci-paper-plane-o"
                                                        aria-hidden="true"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Footer social Start -->
                        <div class="col text-left footer-bottom-left">
                            <div class="footer-bottom-social">
                                <span class="social-text text-upper">Follow us on:</span>
                                <ul class="mb-0">
                                    <li class="list-inline-item"><a class="hdr-facebook" href="#"><i class="ecicon eci-facebook"></i></a></li>
                                    <li class="list-inline-item"><a class="hdr-twitter" href="#"><i class="ecicon eci-twitter"></i></a></li>
                                    <li class="list-inline-item"><a class="hdr-instagram" href="#"><i class="ecicon eci-instagram"></i></a></li>
                                    <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i class="ecicon eci-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer social End -->
                        <!-- Footer Copyright Start -->
                        <div class="col text-center footer-copy">
                            <div class="footer-bottom-copy ">
                                <div class="ec-copy">Copyright © 2021-2022 <a class="site-name text-upper"
                                        href="#">ekka<span>.</span></a>. All Rights Reserved</div>
                            </div>
                        </div>
                        <!-- Footer Copyright End -->
                        <!-- Footer payment -->
                        <div class="col footer-bottom-right">
                            <div class="footer-bottom-payment d-flex justify-content-end">
                                <div class="payment-link">
                                    <img src="{{ asset('frontend') }}/assets/images/icons/payment.png" alt="">
                                </div>

                            </div>
                        </div>
                        <!-- Footer payment -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- Modal -->
    <div class="modal fade" id="ec_quickview_modal{{ $product->id }}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <!-- Swiper -->
                            <div class="qty-product-cover">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('frontend') }}/assets/images/product-image/3_1.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('frontend') }}/assets/images/product-image/3_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('frontend') }}/assets/images/product-image/3_3.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('frontend') }}/assets/images/product-image/3_4.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('frontend') }}/assets/images/product-image/3_5.jpg" alt="">
                                </div>
                            </div>
                            <div class="qty-nav-thumb">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('frontend') }}/assets/images/product-image/3_1.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('frontend') }}/assets/images/product-image/3_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('frontend') }}/assets/images/product-image/3_3.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('frontend') }}/assets/images/product-image/3_4.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('frontend') }}/assets/images/product-image/3_5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="quickview-pro-content">
                                <h5 class="ec-quick-title"><a href="product-left-sidebar.html">Handbag leather purse for women</a>
                                </h5>
                                <div class="ec-quickview-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>

                                <div class="ec-quickview-desc">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s,</div>
                                <div class="ec-quickview-price">
                                    <span class="old-price">$100.00</span>
                                    <span class="new-price">$80.00</span>
                                </div>

                                <div class="ec-pro-variation">
                                    <div class="ec-pro-variation-inner ec-pro-variation-color">
                                        <span>Color</span>
                                        <div class="ec-pro-color">
                                            <ul class="ec-opt-swatch">
                                                <li><span style="background-color:#696d62;"></span></li>
                                                <li><span style="background-color:#d73808;"></span></li>
                                                <li><span style="background-color:#577023;"></span></li>
                                                <li><span style="background-color:#2ea1cd;"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ec-pro-variation-inner ec-pro-variation-size ec-pro-size">
                                        <span>Size</span>
                                        <div class="ec-pro-variation-content">
                                            <ul class="ec-opt-size">
                                                <li class="active"><a href="#" class="ec-opt-sz"
                                                        data-tooltip="Small">S</a></li>
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Medium">M</a></li>
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Large">X</a></li>
                                                <li><a href="#" class="ec-opt-sz" data-tooltip="Extra Large">XL</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ec-quickview-qty">
                                    <div class="qty-plus-minus">
                                        <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                    </div>
                                    <div class="ec-quickview-cart ">
                                        <button class="btn btn-primary"><img src="{{ asset('frontend') }}/assets/images/icons/cart.svg"
                                                class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img
                            src="{{ asset('frontend') }}/assets/images/icons/menu.svg" class="svg_img header_svg" alt="" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><img
                            src="{{ asset('frontend') }}/assets/images/icons/cart.svg" class="svg_img header_svg" alt="" /><span
                            class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="index.html" class="ec-header-btn"><img src="{{ asset('frontend') }}/assets/images/icons/home.svg"
                            class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="wishlist.html" class="ec-header-btn"><img src="{{ asset('frontend') }}/assets/images/icons/wishlist.svg"
                            class="svg_img header_svg" alt="icon" /><span class="ec-cart-noti">4</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="login.html" class="ec-header-btn"><img src="{{ asset('frontend') }}/assets/images/icons/user.svg"
                            class="svg_img header_svg" alt="icon" /></a>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer navigation panel for responsive display end -->

    <!-- Recent Purchase Popup  -->
    <div class="recent-purchase">
        <img src="{{ asset('frontend') }}/assets/images/product-image/1.jpg" alt="payment image">
        <div class="detail">
            <p>Someone in new just bought</p>
            <h6>stylish baby shoes</h6>
            <p>10 Minutes ago</p>
        </div>
        <a href="javascript:void(0)" class="icon-btn recent-close">×</a>
    </div>
    <!-- Recent Purchase Popup end -->

    <!-- Cart Floating Button -->
    <div class="ec-cart-float">
        <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
            <div class="header-icon"><img src="{{ asset('frontend') }}/assets/images/icons/cart.svg" class="svg_img header_svg" alt="" /></div>
            <span class="ec-cart-count cart-count-lable">3</span>
        </a>
    </div>
    <!-- Cart Floating Button end -->

    <!-- Whatsapp -->
    <div class="ec-style ec-right-bottom">
        <!-- Start Floating Panel Container -->
        <div class="ec-panel">
            <!-- Panel Header -->
            <div class="ec-header">
                <strong>Need Help?</strong>
                <p>Chat with us on WhatsApp</p>
            </div>
            <!-- Panel Content -->
            <div class="ec-body">
                <ul>
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="{{ asset('frontend') }}/assets/images/whatsapp/profile_01.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Sahar Darya</span>
                                    <p>Sahar left 7 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="{{ asset('frontend') }}/assets/images/whatsapp/profile_02.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon ec-online"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Yolduz Rafi</span>
                                    <p>Yolduz is online</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="{{ asset('frontend') }}/assets/images/whatsapp/profile_03.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon ec-offline"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Nargis Hawa</span>
                                    <p>Nargis left 30 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="{{ asset('frontend') }}/assets/images/whatsapp/profile_04.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon ec-offline"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Khadija Mehr</span>
                                    <p>Khadija left 50 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                </ul>
            </div>
        </div>
        <!--/ End Floating Panel Container -->
        <!-- Start Right Floating Button-->
        <div class="ec-right-bottom">
            <div class="ec-box">
                <div class="ec-button rotateBackward">
                    <img class="whatsapp" src="{{ asset('frontend') }}/assets/images/common/whatsapp.png" alt="whatsapp icon" />
                </div>
            </div>
        </div>
        <!--/ End Right Floating Button-->
    </div>
    <!-- Whatsapp end -->

    <!-- Feature tools -->

    <!-- Feature tools end -->

    <!-- Vendor JS -->
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/modernizr-3.11.2.min.js"></script>

    <!--Plugins JS-->
    <script src="{{ asset('frontend') }}/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/nouislider.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/countdownTimer.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/scrollup.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/slick.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/infiniteslidev2.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/jquery.sticky-sidebar.js"></script>
        <!-- Google translate Js -->
    <script src="{{ asset('frontend') }}/assets/js/vendor/google-translate.js"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
        }
    </script>
    <!-- Main Js -->
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('#myInput').on('keyup', function() {
            let val = $(this).val().toLowerCase();
            $('.ec-product-inner').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(val) > -1);
            });
        });

        // left side shorting

         $('#ec-select').on('change', function () {
            let status =  $(this).val()
            let url = `/shop-page`
            getData(status,url);
         })

         // left side shorting end

     // right side category shorting start
         $('.categoryChecked').on('change', function() {
            var allCheckboxes = $('.categoryChecked'); // Get all checkboxes
            if ($(this).is(':checked')) {
                allCheckboxes.not(this).prop('disabled', true); // Disable other checkboxes
                let status = $(this).val()
                let url = `/shop-category`
                getData(status,url)
            } else {
                allCheckboxes.prop('disabled', false); // Enable all checkboxes
            }
        });
     // right side category shorting end
     // right side size shorting start
     $('.sizeChecked').on('change', function() {
            var allCheckboxes = $('.sizeChecked'); // Get all checkboxes
            if ($(this).is(':checked')) {
                allCheckboxes.not(this).prop('disabled', true); // Disable other checkboxes
                let status = $(this).val()
                let url = `/shop-size`
                getData(status,url)
            } else {
                allCheckboxes.prop('disabled', false); // Enable all checkboxes
            }
        });
     // right side size shorting end
     // right side price shorting start
            var price = [];
            function getCurrentPriceValues() {
                var lowPrice = parseInt($(".lowPrice").val());
                var highPrice = parseInt($(".highPrice").val());
                return { lowPrice: lowPrice, highPrice: highPrice };
            }
            // Example usage: Retrieve and display current price values
            $("#getPriceValuesButton").on("click", function() {
                var priceValues = getCurrentPriceValues();
                 price = [priceValues.lowPrice,priceValues.highPrice]
                 let url = `/shop-price/${price[0]}/${price[1]}`;

                axios.get(url).then(res => {
                    let products =  res.data
                let productHtml = '';
                products.map((product)=>{
                    // console.log(product);
                    productHtml +=`<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ route('ActiveProduct', $product->slug) }}">
                                                    <div class="image">
                                                        <img class="main-image"
                                                            src="${product.product_info.image}" alt="Product" />
                                                        <img class="hover-image"
                                                            src="${product.product_info.image}" alt="Product" />
                                                    </div>
                                                </a>
                                                {{-- <span class="percentage">20%</span> --}}
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#modal${product.id}"><img
                                                        src="{{ asset('frontend') }}/assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('frontend') }}/assets/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img
                                                            src="{{ asset('frontend') }}/assets/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('frontend') }}/assets/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>




                                        {{-- quick view modal start --}}

                                            <div class="modal fade" id="modal${product.id }" tabindex="-1" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-5 col-sm-12 col-xs-12">
                                                                    <!-- Swiper -->
                                                                    <div class="qty-product-cover">
                                                                        <div class="qty-slide">
                                                                            <img class="img-responsive" src="${product.product_info.image}" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 col-sm-12 col-xs-12">
                                                                    <div class="quickview-pro-content">
                                                                        <h5 class="ec-quick-title"><a href="product-left-sidebar.html">${product.name}</a></h5>
                                                                        <div class="ec-quickview-rating">
                                                                            <i class="ecicon eci-star fill"></i>
                                                                            <i class="ecicon eci-star fill"></i>
                                                                            <i class="ecicon eci-star fill"></i>
                                                                            <i class="ecicon eci-star fill"></i>
                                                                            <i class="ecicon eci-star"></i>
                                                                        </div>

                                                                        <div class="ec-quickview-desc">${product.short_des}...</div>
                                                                        <div class="ec-quickview-price">
                                                                            <span class="new-price">$${product.product_info.sell_price}.00</span>
                                                                            <span class="old-price">$${product.product_info.price}.00</span>
                                                                        </div>

                                                                        <div class="ec-pro-variation">
                                                                            <div class="ec-pro-variation-inner ec-pro-variation-size">
                                                                                <span>Size</span>
                                                                                <div class="ec-pro-variation-content">
                                                                                    <ul>
                                                                                        <li><span>${product.size.title}</span></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ec-quickview-qty">
                                                                            <div class="qty-plus-minus"><div class="dec ec_qtybtn">-</div>
                                                                                <input class="qty-input" type="text" name="ec_qtybtn" value="1">
                                                                            <div class="inc ec_qtybtn">+</div></div>
                                                                            <div class="ec-quickview-cart ">
                                                                                <button class="btn btn-primary">Add To Cart</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                       {{-- quick view modal end --}}




                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">${product.name}</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">${product.short_des}</div>
                                            <span class="ec-price">
                                                <span class="old-price">${ product.product_info.price }.00</span>
                                                <span class="new-price">${product.product_info.sell_price}.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/6_1.jpg"
                                                                data-src-hover="assets/images/product-image/6_1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#e8c2ff;">${product.color.title}</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$25.00" data-new="$20.00"
                                                                data-tooltip="Small">${product.size.title}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`
                })
                document.getElementById('productContainer').innerHTML = productHtml;
                })
            });
     // right side price shorting end
         const getData = (status,url) => {
             axios(`${url}/${status}`).then((res)=>{
                let products =  res.data
                let productHtml = '';
                products.map((product)=>{
                    // console.log(product);
                    productHtml +=`<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ route('ActiveProduct', $product->slug) }}">
                                                    <div class="image">
                                                        <img class="main-image"
                                                            src="${product.product_info.image}" alt="Product" />
                                                        <img class="hover-image"
                                                            src="${product.product_info.image}" alt="Product" />
                                                    </div>
                                                </a>
                                                {{-- <span class="percentage">20%</span> --}}
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#modal${product.id}"><img
                                                        src="{{ asset('frontend') }}/assets/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <div class="ec-pro-actions">
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('frontend') }}/assets/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <button title="Add To Cart" class=" add-to-cart"><img
                                                            src="{{ asset('frontend') }}/assets/images/icons/cart.svg" class="svg_img pro_svg"
                                                            alt="" /> Add To Cart</button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('frontend') }}/assets/images/icons/wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>




                                        {{-- quick view modal start --}}

                                            <div class="modal fade" id="modal${product.id }" tabindex="-1" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-5 col-sm-12 col-xs-12">
                                                                    <!-- Swiper -->
                                                                    <div class="qty-product-cover">
                                                                        <div class="qty-slide">
                                                                            <img class="img-responsive" src="${product.product_info.image}" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 col-sm-12 col-xs-12">
                                                                    <div class="quickview-pro-content">
                                                                        <h5 class="ec-quick-title"><a href="product-left-sidebar.html">${product.name}</a></h5>
                                                                        <div class="ec-quickview-rating">
                                                                            <i class="ecicon eci-star fill"></i>
                                                                            <i class="ecicon eci-star fill"></i>
                                                                            <i class="ecicon eci-star fill"></i>
                                                                            <i class="ecicon eci-star fill"></i>
                                                                            <i class="ecicon eci-star"></i>
                                                                        </div>

                                                                        <div class="ec-quickview-desc">${product.short_des}...</div>
                                                                        <div class="ec-quickview-price">
                                                                            <span class="new-price">$${product.product_info.sell_price}.00</span>
                                                                            <span class="old-price">$${product.product_info.price}.00</span>
                                                                        </div>

                                                                        <div class="ec-pro-variation">
                                                                            <div class="ec-pro-variation-inner ec-pro-variation-size">
                                                                                <span>Size</span>
                                                                                <div class="ec-pro-variation-content">
                                                                                    <ul>
                                                                                        <li><span>${product.size.title}</span></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ec-quickview-qty">
                                                                            <div class="qty-plus-minus"><div class="dec ec_qtybtn">-</div>
                                                                                <input class="qty-input" type="text" name="ec_qtybtn" value="1">
                                                                            <div class="inc ec_qtybtn">+</div></div>
                                                                            <div class="ec-quickview-cart ">
                                                                                <button class="btn btn-primary">Add To Cart</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                       {{-- quick view modal end --}}




                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">${product.name}</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">${product.short_des}</div>
                                            <span class="ec-price">
                                                <span class="old-price">${ product.product_info.price }.00</span>
                                                <span class="new-price">${product.product_info.sell_price}.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/6_1.jpg"
                                                                data-src-hover="assets/images/product-image/6_1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#e8c2ff;">${product.color.title}</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$25.00" data-new="$20.00"
                                                                data-tooltip="Small">${product.size.title}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`
                })
                document.getElementById('productContainer').innerHTML = productHtml;
             })
         }






         // cart add start

         $('.add-to-cart').on('click',function(e) {
            e.preventDefault()
            let id =  $(this).data('id')
            console.log(id);
         })


    </script>


</body>
</html>
