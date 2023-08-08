<div class="ec-side-cat-overlay"></div>
                   <div class="col-lg-3 sidebar-dis-991" data-animation="fadeIn">
                       <div class="cat-sidebar">
                           <div class="cat-sidebar-box">
                               <div class="ec-sidebar-wrap">
                                   <!-- Sidebar Category Block -->
                                   <div class="ec-sidebar-block">
                                       <div class="ec-sb-title">
                                           <h3 class="ec-sidebar-title">Category<button class="ec-close">×</button></h3>
                                       </div>
                                        @foreach($categories as $category)
                                        <div class="ec-sb-block-content">
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-block-item"><img src="{{ asset($category->image) }}" class="svg_img" alt="drink" />{{ $category->title }}</div>
                                                    <ul>
                                                        @foreach ($category->subcategory as $sub_cat)
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">{{ $sub_cat->title }} <span title="Available Stock">- 33</span></a>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        @endforeach
                                   </div>
                                   <!-- Sidebar Category Block -->
                                   <!-- Sidebar Price Block -->
                                   <div class="ec-sidebar-block ec-price-clock">
                                       <div class="ec-sb-title">
                                           <h3 class="ec-sidebar-title">Price</h3>
                                       </div>
                                       <div class="ec-sb-block-content es-price-slider">
                                           <div class="ec-price-filter">
                                               <div id="ec-sliderPrice" class="filter__slider-price" data-min="0"
                                                   data-max="250" data-step="5"></div>
                                               <div class="ec-price-input">
                                                   <label class="filter__label"><input type="text"
                                                           class="filter__input"></label>
                                                   <span class="ec-price-divider"></span>
                                                   <label class="filter__label"><input type="text"
                                                           class="filter__input"></label>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="ec-sidebar-slider">
                               <div class="ec-sb-slider-title">Best Sellers</div>
                               <div class="ec-sb-pro-sl">
                                   <div>
                                       <div class="ec-sb-pro-sl-item">
                                           <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                   src="{{ asset('frontend') }}/assets/images/product-image/1.jpg" alt="product" /></a>
                                           <div class="ec-pro-content">
                                               <h5 class="ec-pro-title"><a href="product-left-sidebar.html">baby fabric shoes</a></h5>
                                               <div class="ec-pro-rating">
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                               </div>
                                               <span class="ec-price">
                                                   <span class="old-price">$5.00</span>
                                                   <span class="new-price">$4.00</span>
                                               </span>
                                           </div>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="ec-sb-pro-sl-item">
                                           <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                   src="{{ asset('frontend') }}/assets/images/product-image/2.jpg" alt="product" /></a>
                                           <div class="ec-pro-content">
                                               <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Men's hoodies t-shirt</a></h5>
                                               <div class="ec-pro-rating">
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star"></i>
                                               </div>
                                               <span class="ec-price">
                                                   <span class="old-price">$10.00</span>
                                                   <span class="new-price">$7.00</span>
                                               </span>
                                           </div>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="ec-sb-pro-sl-item">
                                           <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                   src="{{ asset('frontend') }}/assets/images/product-image/3.jpg" alt="product" /></a>
                                           <div class="ec-pro-content">
                                               <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Girls t-shirt</a></h5>
                                               <div class="ec-pro-rating">
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star"></i>
                                                   <i class="ecicon eci-star"></i>
                                               </div>
                                               <span class="ec-price">
                                                   <span class="old-price">$5.00</span>
                                                   <span class="new-price">$3.00</span>
                                               </span>
                                           </div>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="ec-sb-pro-sl-item">
                                           <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                   src="{{ asset('frontend') }}/assets/images/product-image/4.jpg" alt="product" /></a>
                                           <div class="ec-pro-content">
                                               <h5 class="ec-pro-title"><a href="product-left-sidebar.html">woolen hat for men</a></h5>
                                               <div class="ec-pro-rating">
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                               </div>
                                               <span class="ec-price">
                                                   <span class="old-price">$15.00</span>
                                                   <span class="new-price">$12.00</span>
                                               </span>
                                           </div>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="ec-sb-pro-sl-item">
                                           <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                   src="{{ asset('frontend') }}/assets/images/product-image/5.jpg" alt="product" /></a>
                                           <div class="ec-pro-content">
                                               <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Womens purse</a></h5>
                                               <div class="ec-pro-rating">
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star"></i>
                                               </div>
                                               <span class="ec-price">
                                                   <span class="old-price">$15.00</span>
                                                   <span class="new-price">$12.00</span>
                                               </span>
                                           </div>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="ec-sb-pro-sl-item">
                                           <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                   src="{{ asset('frontend') }}/assets/images/product-image/6.jpg" alt="product" /></a>
                                           <div class="ec-pro-content">
                                               <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Baby toy doctor kit</a></h5>
                                               <div class="ec-pro-rating">
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star"></i>
                                                   <i class="ecicon eci-star"></i>
                                                   <i class="ecicon eci-star"></i>
                                               </div>
                                               <span class="ec-price">
                                                   <span class="old-price">$50.00</span>
                                                   <span class="new-price">$45.00</span>
                                               </span>
                                           </div>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="ec-sb-pro-sl-item">
                                           <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                   src="{{ asset('frontend') }}/assets/images/product-image/7.jpg" alt="product" /></a>
                                           <div class="ec-pro-content">
                                               <h5 class="ec-pro-title"><a href="product-left-sidebar.html">teddy bear baby toy</a></h5>
                                               <div class="ec-pro-rating">
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                               </div>
                                               <span class="ec-price">
                                                   <span class="old-price">$35.00</span>
                                                   <span class="new-price">$25.00</span>
                                               </span>
                                           </div>
                                       </div>
                                   </div>
                                   <div>
                                       <div class="ec-sb-pro-sl-item">
                                           <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                   src="{{ asset('frontend') }}/assets/images/product-image/2.jpg" alt="product" /></a>
                                           <div class="ec-pro-content">
                                               <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Mens hoodies blue</a></h5>
                                               <div class="ec-pro-rating">
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star fill"></i>
                                                   <i class="ecicon eci-star"></i>
                                                   <i class="ecicon eci-star"></i>
                                               </div>
                                               <span class="ec-price">
                                                   <span class="old-price">$15.00</span>
                                                   <span class="new-price">$13.00</span>
                                               </span>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
               </div>
