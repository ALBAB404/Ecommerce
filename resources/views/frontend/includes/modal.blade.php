{{-- @foreach ($featured_products as $featured_product)
@if($featured_product->id == $featured_product->id)
<div class="modal fade" id="quickViewModal{{ $featured_product->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <!-- Swiper -->
                        <div class="qty-product-cover">
                            @foreach ($featured_products as $featured_product)
                            <div class="qty-slide">
                                <img class="img-responsive" src="{{ asset( $featured_product->productInfo->image ) }}" alt="">
                            </div>
                            @endforeach
                        </div>
                        <div class="qty-nav-thumb">
                            @foreach ($featured_products as $featured_product)
                            <div class="qty-slide">
                                <img class="img-responsive" src="{{ asset( $featured_product->productInfo->image ) }}" alt="">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="quickview-pro-content">
                            <h5 class="ec-quick-title"><a href="product-left-sidebar.html">{{ $featured_product->name }}</a></h5>
                            <div class="ec-quickview-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>

                            <div class="ec-quickview-desc">{!! $featured_product->short_des !!}</div>
                            <div class="ec-quickview-price">
                                <span class="new-price">${{ $featured_product->productInfo->sell_price }}.00</span>
                                <span class="old-price">$${{ $featured_product->productInfo->price }}.00</span>
                            </div>

                            <div class="ec-pro-variation">
                                <div class="ec-pro-variation-inner ec-pro-variation-size">
                                    <span>Size</span>
                                    <div class="ec-pro-variation-content">
                                        <ul>
                                            <li><span>{{ $featured_product->size->title }}</span></li>
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
@endif

@endforeach --}}
