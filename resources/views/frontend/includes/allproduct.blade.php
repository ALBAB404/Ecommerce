<div class="col-lg-9 col-md-12">

    <!-- ec New Arrivals, ec Trending, ec Top Rated Start -->
    <div class="row">
        <!-- ec New Arrivals -->
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content margin-b-30" data-animation="fadeIn">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="ec-title">New Arrivals</h2>
                </div>
            </div>
            <div class="ec-new-slider">
                @foreach ($newArrivals as $newArrival)
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="{{ asset($newArrival->productInfo->image) }}"
                                            alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">{{ $newArrival->name }}</a></h5>
                                <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">{{ $newArrival->category->title }}</a></h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">${{ $newArrival->productInfo->sell_price }}.00</span>
                                            <span class="old-price">${{ $newArrival->productInfo->price }}.00</span>
                                            <span class="qty">- 2 pack</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- ec Trending -->
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content margin-b-30" data-animation="fadeIn">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="ec-title">Trending</h2>
                </div>
            </div>
            <div class="ec-new-slider">
                @foreach ($trends as $trend)
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="{{ asset($trend->productInfo->image) }}"
                                            alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">{{ $trend->name }}</a></h5>
                                <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">{{ $trend->category->title }}</a></h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">${{ $trend->productInfo->sell_price }}.00</span>
                                            <span class="old-price">${{ $trend->productInfo->price }}.00</span>
                                            <span class="qty">- 2 pack</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- ec Top Rated -->
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content m-auto" data-animation="fadeIn">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="ec-title">Top Rated</h2>
                </div>
            </div>
            <div class="ec-new-slider">
                @foreach ($toprateds as $toprated)
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="{{ asset($toprated->productInfo->image) }}"
                                            alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">{{ $toprated->name }}</a></h5>
                                <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">{{ $toprated->category->title }}</a></h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">${{ $toprated->productInfo->sell_price }}.00</span>
                                            <span class="old-price">${{ $toprated->productInfo->price }}.00</span>
                                            <span class="qty">- 2 pack</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- ec New Arrivals, ec Trending, ec Top Rated end -->

    <!-- Deal of the day Start -->
    <div class="row space-t-50" data-animation="fadeIn">
        <div class="ec-spe-section col-lg-12 col-md-12 col-sm-12 sectopn-spc-mb">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="ec-title">Deal of the day</h2>
                </div>
            </div>

            <div class="ec-spe-products">
                @foreach ($offerDeals as $offerDeal)
                <div class="ec-spe-product">
                    <div class="ec-spe-pro-inner">
                        <div class="ec-spe-pro-image-outer col-md-6 col-sm-12">
                            <div class="ec-spe-pro-image">
                                <img class="img-responsive" src="{{ asset($offerDeal->image) }}" alt="">
                            </div>
                        </div>
                        <div class="ec-spe-pro-content col-md-6 col-sm-12">
                            <div class="ec-spe-pro-rating">
                                <span class="ec-spe-rating-icon">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                    <i class="ecicon eci-star"></i>
                                </span>
                            </div>
                            <h5 class="ec-spe-pro-title"><a href="product-left-sidebar.html">{{ $offerDeal->title }}</a></h5>
                            <div class="ec-spe-pro-desc">{{ $offerDeal->description }}</div>
                            <div class="ec-spe-price">
                                <span class="new-price">${{ $offerDeal->price }}.00</span>
                                <span class="old-price">${{ $offerDeal->old_price }}.00</span>
                            </div>
                            <div class="ec-spe-pro-btn">
                                <a href="#" class="btn btn-lg btn-primary">Add To Cart</a>
                            </div>
                            <div class="ec-spe-pro-progress">
                                <span class="ec-spe-pro-progress-desc"><span>Already Sold:
                                        <b>{{ $offerDeal->sold_count }}</b></span><span>Available: <b>{{ $offerDeal->available_count }}</b></span></span>
                                <span class="ec-spe-pro-progressbar"></span>
                            </div>
                            <div class="countdowntimer">
                                <span class="ec-spe-count-desc"> Hurry Up! Offer ends in:</span>
                                <span id="ec-spe-count-1"></span>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!--  Special Section End -->
    </div>
    <!-- Deal of the day end -->

    <!-- Product tab area start -->
    <div class="row space-t-50">
        <div class="col-md-12">
            <div class="section-title">
                <h2 class="ec-title">Featured Products</h2>
            </div>
        </div>

        <!-- Tab Start -->
        <div class="col-md-12 ec-pro-tab">
            <ul class="ec-pro-tab-nav nav justify-content-end">
                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                        href="#all">All</a></li>
                    @foreach ($categories as $category)
                        @if(!$category->product_count == 0)
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#cat_id{{ $category->id }}">{{ $category->title }}</a></li>
                        @endif
                    @endforeach
            </ul>
        </div>
        <!-- Tab End -->
    </div>
    <div class="row margin-minus-b-15">
        <div class="col">
            <div class="tab-content">
                <!-- 1st Product tab start -->
                <div class="tab-pane fade show active" id="all">
                    <div class="row">
                        @foreach ($featured_products as $featured_product)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                            <div class="ec-product-inner">
                                <div class="ec-pro-image-outer">
                                    <div class="ec-pro-image">
                                        <a href="{{ route('single_product', $featured_product->slug) }}">
                                            <div class="image">
                                                <img class="main-image"
                                                src="{{ asset($featured_product->productInfo->image) }}" alt="Product" />
                                            <img class="hover-image"
                                                src="{{ asset($featured_product->productInfo->image) }}" alt="Product" />
                                            </div>
                                        </a>
                                        <span class="flags">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="ec-pro-actions">
                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                    src="{{ asset('frontend') }}/assets/images/icons/pro_wishlist.svg"
                                                    class="svg_img pro_svg" alt="" /></a>
                                            <a href="#" class="ec-btn-group quickview" data-id="{{ $featured_product->id }}" data-name="{{ $featured_product->name }}" data-short_des="{{ $featured_product->short_des }}" data-price="{{ $featured_product->productInfo->price }}" data-sell_price="{{ $featured_product->productInfo->sell_price }}" data-size="{{ $featured_product->size->title }}" data-image="{{ $featured_product->productInfo->image }}"  data-sliderImages="{{ json_encode($featured_product->productSlider) }}"
                                                data-link-action="quickview" id="viewBtn" title="Quick view"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal{{ $featured_product->id }}" ><img
                                                    src="{{ asset('frontend') }}/assets/images/icons/quickview.svg"
                                                    class="svg_img pro_svg" alt="" /></a>
                                            <a href="compare.html" class="ec-btn-group compare"
                                                title="Compare"><img src="{{ asset('frontend') }}/assets/images/icons/compare.svg"
                                                    class="svg_img pro_svg" alt="" /></a>
                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{ asset('frontend') }}/assets/images/icons/pro_cart.svg"
                                                    class="svg_img pro_svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">{{ $featured_product->category->title }}</h6></a>
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">{{ $featured_product->name }}</a></h5>
                                    <div class="ec-pro-rat-price">
                                        <span class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                            <i class="ecicon eci-star"></i>
                                            <i class="ecicon eci-star"></i>
                                        </span>
                                        <span class="ec-price">
                                            <span class="new-price">${{ $featured_product->productInfo->sell_price }}</span>
                                            <span class="old-price">${{ $featured_product->productInfo->price }}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- quick view modal start --}}
                        <div class="modal fade" id="quickViewModal{{ $featured_product->id }}" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                                <!-- Swiper -->
                                                <div class="qty-product-cover">
                                                    @foreach ($featured_product->productSlider as $sliderImage)
                                                    <div class="qty-slide">
                                                        <img class="img-responsive" src="{{ asset($sliderImage->image) }}" alt="">
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="qty-nav-thumb">
                                                    @foreach ($featured_product->productSlider as $sliderImage)
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

                        @endforeach
                    </div>
                </div>
                <!-- ec 1st Product tab end -->
                <!-- ec 2nd Product tab start -->
                @foreach ($categories as $category)
                    <div class="tab-pane fade" id="cat_id{{ $category->id }}">
                        <div class="row">
                            @forelse($featured_products as $featured_product)
                            @if($category->id == $featured_product->category->id)
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="{{ route('single_product', $featured_product->slug) }}">
                                                <div class="image">
                                                    <img class="main-image"
                                                        src="{{ asset($featured_product->productInfo->image) }}" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset($featured_product->productInfo->image) }}" alt="Product" />
                                                </div>
                                            </a>
                                            <div class="ec-pro-actions">
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                        src="{{ asset('frontend') }}/assets/images/icons/pro_wishlist.svg"
                                                        class="svg_img pro_svg" alt="" /></a>
                                                <a href="#" class="ec-btn-group quickview"
                                                    data-link-action="quickview" title="Quick view"
                                                    data-bs-toggle="modal" data-bs-target="#quickViewModal{{ $featured_product->id }}"><img
                                                        src="{{ asset('frontend') }}/assets/images/icons/quickview.svg"
                                                        class="svg_img pro_svg" alt="" /></a>
                                                <a href="compare.html" class="ec-btn-group compare"
                                                    title="Compare"><img src="{{ asset('frontend') }}/assets/images/icons/compare.svg"
                                                        class="svg_img pro_svg" alt="" /></a>
                                                <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{ asset('frontend') }}/assets/images/icons/pro_cart.svg"
                                                        class="svg_img pro_svg" alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">{{ $featured_product->category->title }}</h6></a>
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">{{ $featured_product->title }}</a></h5>
                                        <div class="ec-pro-rat-price">
                                            <span class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </span>
                                            <span class="ec-price">
                                                <span class="new-price">${{ $featured_product->productInfo->sell_price }}</span>
                                                <span class="old-price">${{ $featured_product->productInfo->price }}</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                              {{-- quick view modal start --}}
                        <div class="modal fade" id="quickViewModal{{ $featured_product->id }}" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-5 col-sm-12 col-xs-12">
                                                <!-- Swiper -->
                                                <div class="qty-product-cover">
                                                    @foreach ($featured_product->productSlider as $sliderImage)
                                                    <div class="qty-slide">
                                                        <img class="img-responsive" src="{{ asset($sliderImage->image) }}" alt="">
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="qty-nav-thumb">
                                                    @foreach ($featured_product->productSlider as $sliderImage)
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
                            @endif
                            @empty
                                <h1>Product Not Found</h1>
                            @endforelse
                        </div>
                    </div>
                @endforeach

                <!-- ec 2nd Product tab end -->
            </div>
        </div>
    </div>
    <!-- Product tab area end -->

</div>

