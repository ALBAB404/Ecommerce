@extends('frontend.modules.customer.app')
@section('section')
        <!-- Ec cart page -->
        <section class="ec-page-content section-space-p">
            <div class="container">
                <div class="row">
                    <div class="ec-cart-leftside col-lg-8 col-md-12 ">
                        <!-- cart content Start -->
                        <div class="ec-cart-content">
                            <div class="ec-cart-inner">
                                <div class="row">
                                    <form action="#">
                                        <div class="table-content cart-table-content">
                                            <table class="dataLoad">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Price</th>
                                                        <th style="text-align: center;">Quantity</th>
                                                        {{-- <th>Update</th> --}}
                                                        <th>Total</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                @php
                                                    $TotalCount = 0
                                                @endphp
                                                <tbody id="myTable">
                                                    @foreach ($cartItems as $cartItem)
                                                    <tr>
                                                        @php
                                                            $TotalCount += $cartItem->product->productInfo->sell_price * $cartItem->quantity ;
                                                        @endphp
                                                        <td data-label="Product" class="ec-cart-pro-name"><a
                                                                href="product-left-sidebar.html"><img class="ec-cart-pro-img mr-4"
                                                                    src="{{ asset($cartItem->product->productInfo->image) }}"
                                                                    alt="" />{{ $cartItem->product->name }}</a></td>
                                                        <td data-label="Price" class="ec-cart-pro-price"><span
                                                                class="amount">${{ $cartItem->product->productInfo->sell_price }}.00</span></td>
                                                        <td data-label="Quantity" class="ec-cart-pro-qty"
                                                            style="text-align: center;">
                                                            <div class="cart-qty-plus-minus">
                                                                <input class="cart-plus-minus" type="text"
                                                                    name="cartqtybutton" value="{{ $cartItem->quantity }}" />
                                                            </div>
                                                            <button class="btn btn-sm btn-success updateQuantity" data-id="{{ $cartItem->product->id }}">Update</button>
                                                        </td>
                                                        <td data-label="Total" class="ec-cart-pro-subtotal">${{ $cartItem->quantity * $cartItem->product->productInfo->sell_price }}.00</td>
                                                        <td data-label="Remove" class="ec-cart-pro-remove">
                                                            <a href="#" class="delBtn" data-id="{{ $cartItem->id }}"><i class="ecicon eci-trash-o"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="ec-cart-update-bottom">
                                                    <a href="{{ route('shopPage') }}">Continue Shopping</a>
                                                    <a href="{{ route('checkout.index') }}" class="btn btn-primary text-light">Check Out</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--cart content End -->
                    </div>
                    <!-- Sidebar Area Start -->
                    <div class="ec-cart-rightside col-lg-4 col-md-12">
                        <div class="ec-sidebar-wrap">
                            <!-- Sidebar Summary Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Summary</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <h4 class="ec-ship-title">Estimate Shipping</h4>
                                </div>

                                <div class="ec-sb-block-content">
                                    <div class="ec-cart-summary-bottom">
                                        <div class="ec-cart-summary">
                                            <div>
                                                <span class="text-left">Sub-Total</span>
                                                <span class="text-right" id="totalPrice">${{ $TotalCount }}.00</span>
                                            </div>
                                            <div>
                                                <span class="text-left">Discount</span>
                                                <span class="text-right">(-)$<span id="discountCouponPrice">00</span>.00</span>
                                            </div>
                                            <div>
                                                <span class="text-left">Coupan Discount</span>
                                                <span class="text-right"><a class="ec-cart-coupan">Apply Coupan</a></span>
                                            </div>
                                            <div class="ec-cart-coupan-content">
                                                <div id="errorMessages"></div>
                                                <form class="ec-cart-coupan-form" id="apply-coupon" name="ec-cart-coupan-form" method="post"
                                                    action="#">
                                                    <input class="ec-coupan" type="text" required="" id="applyCoupon"
                                                        placeholder="Enter Your Coupan Code" name="ec-coupan" value="">
                                                    <button class="ec-coupan-btn button btn-primary" id="apply"  type="submit"
                                                        name="subscribe" value="">Apply</button>
                                                </form>
                                            </div>
                                            <div class="ec-cart-summary-total">
                                                <span class="text-left">Total Amount</span>
                                                <span class="text-right">$<span id="totalAmount">00</span>.00</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Summary Block -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- New Product Start -->
        <section class="section ec-new-product section-space-p">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-title">
                            <h2 class="ec-bg-title">New Arrivals</h2>
                            <h2 class="ec-title">New Arrivals</h2>
                            <p class="sub-title">Browse The Collection of Top Products</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- New Product Content -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image"
                                            src="{{ asset('frontend') }}/assets/images/product-image/6_1.jpg" alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('frontend') }}/assets/images/product-image/6_2.jpg" alt="Product" />
                                    </a>
                                    <span class="percentage">20%</span>
                                    <a href="#" class="quickview" data-link-action="quickview"
                                        title="Quick view" data-bs-toggle="modal"
                                        data-bs-target="#ec_quickview_modal"><img
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
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Round Neck T-Shirt</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                                <span class="ec-price">
                                    <span class="old-price">$27.00</span>
                                    <span class="new-price">$22.00</span>
                                </span>
                                <div class="ec-pro-option">
                                    <div class="ec-pro-color">
                                        <span class="ec-pro-opt-label">Color</span>
                                        <ul class="ec-opt-swatch ec-change-img">
                                            <li class="active"><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{ asset('frontend') }}/assets/images/product-image/6_1.jpg"
                                                    data-src-hover="assets/images/product-image/6_1.jpg"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#e8c2ff;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{ asset('frontend') }}/assets/images/product-image/6_2.jpg"
                                                    data-src-hover="assets/images/product-image/6_2.jpg"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#9cfdd5;"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="ec-pro-size">
                                        <span class="ec-pro-opt-label">Size</span>
                                        <ul class="ec-opt-size">
                                            <li class="active"><a href="#" class="ec-opt-sz"
                                                    data-old="$25.00" data-new="$20.00"
                                                    data-tooltip="Small">S</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$27.00"
                                                    data-new="$22.00" data-tooltip="Medium">M</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$35.00"
                                                    data-new="$30.00" data-tooltip="Extra Large">XL</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image"
                                            src="{{ asset('frontend') }}/assets/images/product-image/7_1.jpg" alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('frontend') }}/assets/images/product-image/7_2.jpg" alt="Product" />
                                    </a>
                                    <span class="percentage">20%</span>
                                    <span class="flags">
                                        <span class="sale">Sale</span>
                                    </span>
                                    <a href="#" class="quickview" data-link-action="quickview"
                                        title="Quick view" data-bs-toggle="modal"
                                        data-bs-target="#ec_quickview_modal"><img
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
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve Shirt</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                                <span class="ec-price">
                                    <span class="old-price">$12.00</span>
                                    <span class="new-price">$10.00</span>
                                </span>
                                <div class="ec-pro-option">
                                    <div class="ec-pro-color">
                                        <span class="ec-pro-opt-label">Color</span>
                                        <ul class="ec-opt-swatch ec-change-img">
                                            <li class="active"><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{ asset('frontend') }}/assets/images/product-image/7_1.jpg"
                                                    data-src-hover="assets/images/product-image/7_1.jpg"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#01f1f1;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{ asset('frontend') }}/assets/images/product-image/7_2.jpg"
                                                    data-src-hover="assets/images/product-image/7_2.jpg"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#b89df8;"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="ec-pro-size">
                                        <span class="ec-pro-opt-label">Size</span>
                                        <ul class="ec-opt-size">
                                            <li class="active"><a href="#" class="ec-opt-sz"
                                                    data-old="$12.00" data-new="$10.00"
                                                    data-tooltip="Small">S</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$15.00"
                                                    data-new="$12.00" data-tooltip="Medium">M</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$20.00"
                                                    data-new="$17.00" data-tooltip="Extra Large">XL</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image"
                                            src="{{ asset('frontend') }}/assets/images/product-image/1_1.jpg" alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('frontend') }}/assets/images/product-image/1_2.jpg" alt="Product" />
                                    </a>
                                    <span class="percentage">20%</span>
                                    <span class="flags">
                                        <span class="sale">Sale</span>
                                    </span>
                                    <a href="#" class="quickview" data-link-action="quickview"
                                        title="Quick view" data-bs-toggle="modal"
                                        data-bs-target="#ec_quickview_modal"><img
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
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Cute Baby Toy's</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                                <span class="ec-price">
                                    <span class="old-price">$40.00</span>
                                    <span class="new-price">$30.00</span>
                                </span>
                                <div class="ec-pro-option">
                                    <div class="ec-pro-color">
                                        <span class="ec-pro-opt-label">Color</span>
                                        <ul class="ec-opt-swatch ec-change-img">
                                            <li class="active"><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{ asset('frontend') }}/assets/images/product-image/1_1.jpg"
                                                    data-src-hover="assets/images/product-image/1_1.jpg"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#90cdf7;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{ asset('frontend') }}/assets/images/product-image/1_2.jpg"
                                                    data-src-hover="assets/images/product-image/1_2.jpg"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#ff3b66;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{ asset('frontend') }}/assets/images/product-image/1_3.jpg"
                                                    data-src-hover="assets/images/product-image/1_3.jpg"
                                                    data-tooltip="Green"><span
                                                        style="background-color:#ffc476;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{ asset('frontend') }}/assets/images/product-image/1_4.jpg"
                                                    data-src-hover="assets/images/product-image/1_4.jpg"
                                                    data-tooltip="Sky Blue"><span
                                                        style="background-color:#1af0ba;"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="ec-pro-size">
                                        <span class="ec-pro-opt-label">Size</span>
                                        <ul class="ec-opt-size">
                                            <li class="active"><a href="#" class="ec-opt-sz"
                                                    data-old="$40.00" data-new="$30.00"
                                                    data-tooltip="Small">S</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-old="$50.00"
                                                    data-new="$40.00" data-tooltip="Medium">M</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image"
                                            src="{{ asset('frontend') }}/assets/images/product-image/2_1.jpg" alt="Product" />
                                        <img class="hover-image"
                                            src="{{ asset('frontend') }}/assets/images/product-image/2_2.jpg" alt="Product" />
                                    </a>
                                    <span class="percentage">20%</span>
                                    <span class="flags">
                                        <span class="new">New</span>
                                    </span>
                                    <a href="#" class="quickview" data-link-action="quickview"
                                        title="Quick view" data-bs-toggle="modal"
                                        data-bs-target="#ec_quickview_modal"><img
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
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Jumbo Carry Bag</a></h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                                <span class="ec-price">
                                    <span class="old-price">$50.00</span>
                                    <span class="new-price">$40.00</span>
                                </span>
                                <div class="ec-pro-option">
                                    <div class="ec-pro-color">
                                        <span class="ec-pro-opt-label">Color</span>
                                        <ul class="ec-opt-swatch ec-change-img">
                                            <li class="active"><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{ asset('frontend') }}/assets/images/product-image/2_1.jpg"
                                                    data-src-hover="assets/images/product-image/2_2.jpg"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#fdbf04;"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 shop-all-btn"><a href="#">Shop All Collection</a></div>
                </div>
            </div>
        </section>
        <!-- New Product end -->
@endsection

@push('js')
    <script>


    //     // Fetch Data To Cart start

    //     const getCartData = () =>{
    //         axios.get('/cart/index').then((res)=>{
    //             let cartItems =  res.data
    //            myTable(cartItems)
    //         })
    //     }

    //     function myTable(cartItems) {
    //         $('#myTable').empty();
    //         cartItems.map(cartItem => {
    //             // console.log(cartItem.product.product_info.image);
    //         $('#myTable').append(`
    //         <tr>
    //             <td data-label="Product" class="ec-cart-pro-name"><a
    //                     href="product-left-sidebar.html"><img class="ec-cart-pro-img mr-4"
    //                         src="${cartItem.product.product_info.image}"
    //                         alt="" />${cartItem.product.name}</a></td>
    //             <td data-label="Price" class="ec-cart-pro-price"><span
    //                     class="amount">${cartItem.product.product_info.sell_price}.00</span></td>
    //             <td data-label="Quantity" class="ec-cart-pro-qty"
    //                 style="text-align: center;">
    //                 <div class="cart-qty-plus-minus">
    //                     <input class="cart-plus-minus" type="text"
    //                         name="cartqtybutton" value="${cartItem.quantity}" />
    //                 </div>
    //                 <button class="btn btn-sm btn-success updateQuantity" data-id="${cartItem.product.id}">Update</button>
    //             </td>
    //             <td data-label="Total" id="totalPrice" class="ec-cart-pro-subtotal">$${cartItem.quantity * cartItem.product.product_info.sell_price}.00</td>
    //             <td data-label="Remove" class="ec-cart-pro-remove">
    //                 <a href="#" class="delBtn" data-id="${cartItem.id}"><i class="ecicon eci-trash-o"></i></a>
    //             </td>
    //         </tr>
    //         `);
    //     });
    // }
    //     Fetch Data To Cart End

        // update price code start
        function updateTotalPrice() {
            let total = 0;
            $("#myTable tr").each(function() {
                let price = parseFloat($(this).find('.ec-cart-pro-subtotal').text().replace('$', ''));
                if (!isNaN(price)) total += price;
             });

            // Display the updated total
            $("#totalPrice").text(`$${total.toFixed(2)}`);
        }
        // update price code end

        // Update Cart start
        $('body').on('click','.updateQuantity', function(e){
            e.preventDefault()
            let row = $(this).closest('tr')
            let product_id = $(this).data('id')
            let product_quantity = row.find('.cart-plus-minus').val()
            axios.post(`/cart/update/${product_id}`,{product_quantity:product_quantity}).then((res)=>{
                let updatedPrice = res.data
                row.find('.ec-cart-pro-subtotal').text(`$${updatedPrice}`);
                updateTotalPrice();
                // console.log(updatedPrice);
            })
        })

        // Update Cart end
        // Delete Cart start

        $('body').on('click', '.delBtn', function(e) {
            e.preventDefault()
            let row = $(this).closest('tr');
            let delID =  $(this).data('id')
            console.log(delID);
            let rowToDelete = $(this).closest('tr');
            axios.delete(`/cart/destroy/${delID}`).then((res) => {
                row.remove();
                updateTotalPrice();
            }).catch((err) => {

            });

        })

        // Delete Cart end



        // apply coupon
        $('#apply-coupon').on('submit',function(e){
            e.preventDefault();
            let Totalcount = 0
            let applyCoupon = $('#applyCoupon').val()
            let totalAmount  = $('#totalAmount')
            let totalPriceText  = $('#totalPrice').text()
            let totalPrice = parseFloat(totalPriceText.replace('$', ''));
            axios.post(`/admin/coupon/applyCoupon`,{applyCoupon:applyCoupon}).then((res)=>{

                let oldCouponPriceType =  res.data.type
                let oldCouponPriceValue =  res.data.value
                if (oldCouponPriceType === 'flat') {
                    $('#discountCouponPrice').html(res.data.value)
                    $('.ec-cart-coupan-content').slideToggle('hide');       // main. js er maddhome ei  code ta niye asha
                    Totalcount = totalPrice - oldCouponPriceValue
                    totalAmount.text(Totalcount)
                }
                if (oldCouponPriceType === 'percentage') {
                    let discountAmount = totalPrice * oldCouponPriceValue;
                    $('#discountCouponPrice').html((oldCouponPriceValue * 100) + '%');
                    $('.ec-cart-coupan-content').slideToggle('hide');
                    let Totalcount = totalPrice - discountAmount;
                    // console.log(Totalcount);
                        totalAmount.text(Totalcount.toFixed(2));
                }

                updateTotalPrice();


            })
        })

    </script>
@endpush
