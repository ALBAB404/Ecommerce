@extends('frontend.modules.customer.app')
@section('section')
<div class="checkout_page">
    <div class="container">
        <div class="row">
            <div class="ec-checkout-leftside col-lg-8 col-md-12 ">
                <!-- checkout content Start -->
                <div class="ec-checkout-content">
                    <div class="ec-checkout-inner">
                        <div class="ec-checkout-wrap margin-bottom-30 padding-bottom-3">
                            <div class="ec-checkout-block ec-check-bill">
                                <h3 class="ec-checkout-title">Billing Details</h3>
                                <div class="ec-bl-block-content">
                                    <div class="ec-check-bill-form">
                                        <form action="#" method="post">
                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>First Name*</label>
                                                <input type="text" name="firstname"
                                                    placeholder="Enter your first name" id="firstname" required />
                                            </span>
                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>Last Name*</label>
                                                <input type="text" name="lastname"
                                                    placeholder="Enter your last name" id="lastname" required />
                                            </span>
                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>Phone*</label>
                                                <input type="number" name="phone"
                                                    placeholder="Enter your last name" id="phone" required />
                                            </span>
                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>Email*</label>
                                                <input type="text" name="email"
                                                    placeholder="Enter your last name" id="email" required />
                                            </span>
                                            <span class="ec-bill-wrap">
                                                <label>Address</label>
                                                <input type="text" name="address" id="address" placeholder="Address Line 1" />
                                            </span>
                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>City</label>
                                                <input type="text" name="city" id="city" placeholder="Post Code" />
                                            </span>
                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label> State</label>
                                                <input type="text" name="state" id="state" placeholder="Post Code" />
                                            </span>
                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>Country</label>
                                                <input type="text" name="country" id="country" placeholder="Post Code" />
                                            </span>
                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>Post Code</label>
                                                <input type="text" name="postalcode" id="postalcode" placeholder="Post Code" />
                                            </span>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <span class="ec-check-order-btn">
                            <a class="btn btn-primary" id="place_order" href="#">Place Order</a>
                        </span>
                    </div>
                </div>
                <!--cart content End -->
            </div>
            <!-- Sidebar Area Start -->
            <div class="ec-checkout-rightside col-lg-4 col-md-12">
                <div class="ec-sidebar-wrap">
                     <!-- Sidebar Summary Block -->
                     <div class="ec-sidebar-block">
                        <div class="ec-sb-title">
                            <h3 class="ec-sidebar-title">Summary</h3>
                        </div>
                        <div class="ec-sb-block-content">
                            <h4 class="ec-ship-title">Estimate Shipping</h4>
                        </div>
                        @php
                        $TotalCount = 0;
                        foreach ($cartItems as $cartItem) {
                            $TotalCount += $cartItem->product->productInfo->sell_price * $cartItem->quantity ;
                        }
                        @endphp
                        <div class="ec-sb-block-content">
                            <div class="ec-cart-summary-bottom">
                                <div class="ec-cart-summary">
                                    <div>
                                        <span class="text-left">Sub-Total</span>
                                        <span class="text-right" id="subtotalAmount">${{ getTotalAmount() }}.00</span>
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
                                        <span class="text-right">$<span id="totalAmount">{{ getTotalAmount() }}</span>.00</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Summary Block -->
                </div>
                <div class="ec-sidebar-wrap ec-checkout-pay-wrap">
                    <!-- Sidebar Payment Block -->
                    <div class="ec-sidebar-block">
                        <div class="ec-sb-title">
                            <h3 class="ec-sidebar-title">Payment Method</h3>
                        </div>
                        <div class="ec-sb-block-content">
                            <div class="ec-checkout-pay">
                                <div class="ec-pay-desc">Please select the preferred payment method to use on this
                                    order.</div>
                                <form action="#">
                                    <span class="ec-pay-option">
                                        <h5><b>Payment Method</b></h5>
                                        <hr>
                                        <select name="payment_method" id="payment_method" class="form-control">
                                            <option value="">Select A Payment Method</option>
                                            <option value="cash">Hand Cash</option>
                                            <option value="bksh">Bksh</option>
                                            <option value="stripe">Stripe</option>
                                        </select>
                                        <div class="form-group mt-2">
                                            <input type="text" class="form-control" id="trans_id" name="trans_id" placeholder="Transiction No.(AB5036)" >
                                        </div>
                                    </span>
                                    <span class="ec-pay-agree"><input type="checkbox" value=""><a href="#">I have
                                            read and agree to the <span>Terms & Conditions</span></a><span class="checked"></span>
                                    </span>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Payment Block -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script>

        // select method start
        const $$ = (el) => document.querySelector(el);
    const $$$ = (el) => document.querySelectorAll(el);

    const trans_id = $$('#trans_id');
    const payment_method = $$('#payment_method');

    trans_id.style.display = 'none';

    payment_method.addEventListener('change',function(e){
        if(this.value){
            if(this.value === 'bksh'){
                trans_id.style.display = 'block';
            }else{
                trans_id.style.display = 'none';
            }
        }else{
            trans_id.style.display = 'none';
        }
    })
        // select method end

          // apply coupon
          $('#apply-coupon').on('submit',function(e){
            e.preventDefault();
            let Totalcount = 0
            let applyCoupon = $('#applyCoupon').val()
            let totalAmount  = $('#totalAmount')
            let totalPriceText  = $('#subtotalAmount').text()
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




            })
        })



        //************************************************ CRUD Start*******************************************
        $('#place_order').on('click', function(e){
            e.preventDefault();
            let totalAmount =  $('#totalAmount').text()
            let totalPrice = parseFloat(totalAmount.replace('$', ''));
            let subtotalAmount =  $('#subtotalAmount').text()
            let subtotalPrice = parseFloat(subtotalAmount.replace('$', ''));
            const data = {
                firstname: $('#firstname').val(),
                lastname: $('#lastname').val(),
                address: $('#address').val(),
                city: $('#city').val(),
                state: $('#state').val(),
                phone: $('#phone').val(),
                country: $('#country').val(),
                discountCouponPrice: $('#discountCouponPrice').text(),
                postalcode: $('#postalcode').val(),
                trans_id: $('#trans_id').val(),
                email: $('#email').val(),
                paymentMethod: $('#payment_method').val(),
                subtotalPrice: subtotalPrice,
                totalAmount: totalPrice
                };

                axios.post(`/checkout`, data).then((res)=>{
                    console.log(res.data);
                })

        })



        //************************************************ CRUD End *******************************************


    </script>
@endpush
