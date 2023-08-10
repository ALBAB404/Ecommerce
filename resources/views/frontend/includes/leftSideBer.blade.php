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
                                @foreach ($featured_products as $featured_product)
                                <div>
                                    <div class="ec-sb-pro-sl-item">
                                        <a href="{{ route('single_product', $featured_product->slug) }}" class="sidekka_pro_img"><img
                                                src="{{ asset( $featured_product->productInfo->image ) }}" alt="product" /></a>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">{{ $featured_product->name }}</a></h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">${{ $featured_product->productInfo->price }}.00</span>
                                                <span class="new-price">${{ $featured_product->productInfo->sell_price }}.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                               </div>
                           </div>
                       </div>
               </div>
