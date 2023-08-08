
<!DOCTYPE html>
<html lang="en">

<head>
   @include('frontend.includes.head')
</head>
<body>

   <!-- Header start  -->
    @include('frontend.includes.header')
   <!-- Header End  -->

   <!-- Ekka Cart Start -->
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
                       <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                               src="{{ asset('frontend') }}/assets/images/product-image/93_1.jpg" alt="product"></a>
                       <div class="ec-pro-content">
                           <a href="single-product-left-sidebar.html" class="cart_pro_title">Mens Winter Leathers Jackets</a>
                           <span class="cart-price"><span>$49.00</span> x 1</span>
                           <div class="qty-plus-minus">
                               <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                           </div>
                           <a href="#" class="remove">×</a>
                       </div>
                   </li>
                   <li>
                       <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                               src="{{ asset('frontend') }}/assets/images/product-image/96_1.jpg" alt="product"></a>
                       <div class="ec-pro-content">
                           <a href="product-left-sidebar.html" class="cart_pro_title">Running & Trekking Shoes - White</a>
                           <span class="cart-price"><span>$150.00</span> x 1</span>
                           <div class="qty-plus-minus">
                               <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                           </div>
                           <a href="#" class="remove">×</a>
                       </div>
                   </li>
                   <li>
                       <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                               src="{{ asset('frontend') }}/assets/images/product-image/111_1.jpg" alt="product"></a>
                       <div class="ec-pro-content">
                           <a href="product-left-sidebar.html" class="cart_pro_title">Rose Gold Peacock Earrings</a>
                           <span class="cart-price"><span>$950.00</span> x 1</span>
                           <div class="qty-plus-minus">
                               <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                           </div>
                           <a href="#" class="remove">×</a>
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
   <!-- Ekka Cart End -->

   <!-- Main Slider Start -->
   @include('frontend.includes.banner')
   </div>
   <!-- Main Slider End -->

   <!--  category Section Start -->
   @include('frontend.includes.categorySection')
   <!--category Section End -->

    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">
                <!-- Sidebar area start -->

                @include('frontend.includes.leftSideBer')

                <!-- Product area start -->
                @include('frontend.includes.allproduct')
            </div>
        </div>
    </section>
    <!-- ec Product tab Area End -->

   <!--  Testimonial, Banner & Service Section Start -->
   @include('frontend.includes.testimonial')
   <!--  End Testimonial, Banner & Service Section Start -->

   <!--  Blog Section Start -->
   @include('frontend.includes.blog')
   <!--  Blog Section End -->

   <!-- Ec Instagram Start -->
   @include('frontend.includes.instagramslider')
   <!-- Ec Instagram End -->

   <!-- Footer Start -->
    @include('frontend.includes.footer')
   <!-- Footer Area End -->

   <!-- Modal -->
   <div class="modal fade" id="ec_quickview_modal" tabindex="-1" role="dialog">
       <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
               <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
               <div class="modal-body">
                   <div class="row">
                       <div class="col-md-5 col-sm-12 col-xs-12">
                           <!-- Swiper -->
                           <div class="qty-product-cover">
                               <div class="qty-slide">
                                   <img class="img-responsive" src="{{ asset('frontend') }}/assets/images/product-image/94_1.jpg" alt="">
                               </div>
                               <div class="qty-slide">
                                   <img class="img-responsive" src="{{ asset('frontend') }}/assets/images/product-image/94_2.jpg" alt="">
                               </div>
                               <div class="qty-slide">
                                   <img class="img-responsive" src="{{ asset('frontend') }}/assets/images/product-image/93_1.jpg" alt="">
                               </div>
                               <div class="qty-slide">
                                   <img class="img-responsive" src="{{ asset('frontend') }}/assets/images/product-image/93_2.jpg" alt="">
                               </div>
                               <div class="qty-slide">
                                   <img class="img-responsive" src="{{ asset('frontend') }}/assets/images/product-image/94_2.jpg" alt="">
                               </div>
                           </div>
                           <div class="qty-nav-thumb">
                               <div class="qty-slide">
                                   <img class="img-responsive" src="{{ asset('frontend') }}/assets/images/product-image/94_1.jpg" alt="">
                               </div>
                               <div class="qty-slide">
                                   <img class="img-responsive" src="{{ asset('frontend') }}/assets/images/product-image/94_2.jpg" alt="">
                               </div>
                               <div class="qty-slide">
                                   <img class="img-responsive" src="{{ asset('frontend') }}/assets/images/product-image/93_1.jpg" alt="">
                               </div>
                               <div class="qty-slide">
                                   <img class="img-responsive" src="{{ asset('frontend') }}/assets/images/product-image/93_2.jpg" alt="">
                               </div>
                               <div class="qty-slide">
                                   <img class="img-responsive" src="{{ asset('frontend') }}/assets/images/product-image/94_2.jpg" alt="">
                               </div>
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
   <!-- Modal end -->

   <!-- Click To Call -->
   <div class="ec-cc-style cc-right-bottom">
       <!-- Start Floating Panel Container -->
       <div class="cc-panel">
           <!-- Panel Content -->
           <div class="cc-header">
               <img src="{{ asset('frontend') }}/assets/images/whatsapp/profile_01.jpg" alt="profile image"/>
               <h2>John Mark</h2>
               <p>Tachnical Manager</p>
           </div>
           <div class="cc-body">
               <p><b>Hey there &#128515;</b></p>
               <p>Need help ? just give me a call.</p>
           </div>
           <div class="cc-footer">
               <a href="tel:+919099153528" class="cc-call-button">
                   <span>Call me</span>
                   <svg width="13px" height="10px" viewBox="0 0 13 10">
                   <path d="M1,5 L11,5"></path>
                   <polyline points="8 1 12 5 8 9"></polyline>
                   </svg>
               </a>
           </div>
       </div>
       <!--/ End Floating Panel Container -->

       <!-- Start Right Floating Button-->
       <div class="cc-button cc-right-bottom">
           <img src="{{ asset('frontend') }}/assets/images/icons/call.svg" class="svg_img cc-call-svg" alt="call image" />
       </div>
       <!--/ End Right Floating Button-->

   </div>
   <!-- Click To Call end -->

   <!-- Newsletter Modal Start -->
   {{-- <div id="ec-popnews-bg"></div>
   <div id="ec-popnews-box">
       <div id="ec-popnews-close"><i class="ecicon eci-close"></i></div>
       <div class="row">
           <div class="col-md-7 disp-no-767">
               <img src="{{ asset('frontend') }}/assets/images/banner/newsletter-8.png" alt="newsletter">
           </div>
           <div class="col-md-5">
               <div id="ec-popnews-box-content">
                   <h2>Subscribe Newsletter.</h2>
                   <p>Subscribe the ekka ecommerce to get in touch and get the future update. </p>
                   <form id="ec-popnews-form" action="#" method="post">
                       <input type="email" name="newsemail" placeholder="Email Address" required />
                       <button type="button" class="btn btn-primary" name="subscribe">Subscribe</button>
                   </form>
               </div>
           </div>
       </div>
   </div> --}}
   <!-- Newsletter Modal end -->

   <!-- Footer navigation panel for responsive display -->
   <div class="ec-nav-toolbar">
       <div class="container">
           <div class="ec-nav-panel">
               <div class="ec-nav-panel-icons">
                   <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img
                           src="{{ asset('frontend') }}/assets/images/icons/menu.svg" class="svg_img header_svg" alt="icon" /></a>
               </div>
               <div class="ec-nav-panel-icons">
                   <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><img
                           src="{{ asset('frontend') }}/assets/images/icons/cart.svg" class="svg_img header_svg" alt="icon" /><span
                           class="ec-cart-noti ec-header-count ec-cart-count cart-count-lable">3</span></a>
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
                   <a href="#ec-mobile-sidebar" class="ec-header-btn ec-sidebar-toggle d-lg-none">
                       <img src="{{ asset('frontend') }}/assets/images/icons/category-icon.svg" class="svg_img header_svg" alt="icon" />
                   </a>
               </div>

           </div>
       </div>
   </div>
   <!-- Footer navigation panel for responsive display end -->

   <!-- Recent Purchase Popup  -->
   {{-- <div class="recent-purchase">
       <img src="{{ asset('frontend/assets/images/product-image/111_1.jpg') }}" alt="payment image">
       <div class="detail">
           <p>Someone in new just bought</p>
           <h6>Rose Gold Earrings</h6>
           <p>2 Minutes ago</p>
       </div>
       <a href="javascript:void(0)" class="icon-btn recent-close">×</a>
   </div> --}}
   <!-- Recent Purchase Popup end -->

   <!-- Add to Cart successfully toast Start -->
   <div id="addtocart_toast" class="addtocart_toast">
       <div class="desc">You Have Add To Cart Successfully</div>
   </div>
   <div id="wishlist_toast" class="wishlist_toast">
       <div class="desc">You Have Add To Wishlist Successfully</div>
   </div>
   <!-- Add to Cart successfully toast end -->

   <!-- Vendor JS -->

   @include('frontend.includes.script')

</body>

</html>
