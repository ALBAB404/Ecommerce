
<!DOCTYPE html>
<html lang="en">

<head>
   @include('frontend.includes.head')
   <!-- Main Style -->
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/demo8.css') }}" />
</head>
<body>

   <!-- Header start  -->
    @include('frontend.includes.header')
   <!-- Header End  -->



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
    @include('frontend.includes.modal')
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
