<section class="section ec-ser-spe-section section-space-p">
    <div class="container" data-animation="fadeIn">
        <div class="row">
            <!-- ec Testimonial Start -->
            <div class="ec-test-section col-lg-3 col-md-6 col-sm-12 col-xs-6 sectopn-spc-mb" data-animation="slideInRight">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="ec-title">Testimonial</h2>
                    </div>
                </div>
                <div class="ec-test-outer">
                    <ul id="ec-testimonial-slider">
                        <li class="ec-test-item">
                            <div class="ec-test-inner">
                                <div class="ec-test-img">
                                    <img alt="testimonial" title="testimonial"
                                        src="{{ asset('frontend') }}/assets/images/testimonial/1.jpg" />
                                </div>
                                <div class="ec-test-content">
                                    <div class="ec-test-name">mark jofferson</div>
                                    <div class="ec-test-designation">- CEO & Founder Invision</div>
                                    <div class="ec-test-divider">
                                        <img src="{{ asset('frontend') }}/assets/images/testimonial/quotes.svg" class="svg_img test_svg"
                                            alt="" />
                                    </div>
                                    <div class="ec-test-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                        dolor dolor sit amet.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="ec-test-item">
                            <div class="ec-test-inner">
                                <div class="ec-test-img">
                                    <img alt="testimonial" title="testimonial"
                                        src="{{ asset('frontend') }}/assets/images/testimonial/2.jpg" />
                                </div>
                                <div class="ec-test-content">
                                    <div class="ec-test-name">mark jofferson</div>
                                    <div class="ec-test-designation">- CEO & Founder Invision</div>
                                    <div class="ec-test-divider">
                                        <img src="{{ asset('frontend') }}/assets/images/testimonial/quotes.svg" class="svg_img test_svg"
                                            alt="" />
                                    </div>
                                    <div class="ec-test-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                        dolor dolor sit amet.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="ec-test-item">
                            <div class="ec-test-inner">
                                <div class="ec-test-img">
                                    <img alt="testimonial" title="testimonial"
                                        src="{{ asset('frontend') }}/assets/images/testimonial/3.jpg" />
                                </div>
                                <div class="ec-test-content">
                                    <div class="ec-test-name">mark jofferson</div>
                                    <div class="ec-test-designation">- CEO & Founder Invision</div>
                                    <div class="ec-test-divider">
                                        <img src="{{ asset('frontend') }}/assets/images/testimonial/quotes.svg" class="svg_img test_svg"
                                            alt="" />
                                    </div>
                                    <div class="ec-test-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                        dolor dolor sit amet.
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ec Testimonial end -->
            <!-- ec Banner Start -->
            <div class="col-md-6 col-sm-12" data-animation="fadeIn">
                <div class="ec-banner-inner">
                    <div class="ec-banner-block ec-banner-block-1" style="width: 100%; height: 100%; padding: 0 15px; background-image: url({{ $offerDeals->first()->image }}); background-position: center; background-size: cover; background-repeat: no-repeat;">
                        <div class="banner-block">
                            <div class="banner-content">
                                <div class="banner-text">
                                    <span class="ec-banner-disc">{{ $offerDeals->first()->discount }}% discount</span>
                                    <span class="ec-banner-title">{{ $offerDeals->first()->title }}</span>
                                    <span class="ec-banner-stitle">Starting @ ${{ $offerDeals->first()->price }}</span>
                                </div>
                                <span class="ec-banner-btn"><a href="shop-left-sidebar-col-3.html">Shop Now <i
                                            class="ecicon eci-angle-double-right" aria-hidden="true"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ec Banner End -->
            <!--  Service Section Start -->
            <div class="ec-services-section col-lg-3 col-md-3 col-sm-3" data-animation="slideInLeft">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="ec-title">Our Services</h2>
                    </div>
                </div>
                <div class="ec_ser_block">
                    <div class="ec_ser_content ec_ser_content_1 col-sm-12">
                        <div class="ec_ser_inner">
                            <div class="ec-service-image">
                                <img src="{{ asset('frontend') }}/assets/images/icons/service_4_1.svg" class="svg_img ser_svg" alt="" />
                            </div>
                            <div class="ec-service-desc">
                                <h2>Worldwide Delivery</h2>
                                <p>For Order Over $100</p>
                            </div>
                        </div>
                    </div>
                    <div class="ec_ser_content ec_ser_content_2 col-sm-12">
                        <div class="ec_ser_inner">
                            <div class="ec-service-image">
                                <img src="{{ asset('frontend') }}/assets/images/icons/service_4_2.svg" class="svg_img ser_svg" alt="" />
                            </div>
                            <div class="ec-service-desc">
                                <h2>Next Day delivery</h2>
                                <p>UK Orders Only</p>
                            </div>
                        </div>
                    </div>
                    <div class="ec_ser_content ec_ser_content_3 col-sm-12">
                        <div class="ec_ser_inner">
                            <div class="ec-service-image">
                                <img src="{{ asset('frontend') }}/assets/images/icons/service_4_3.svg" class="svg_img ser_svg" alt="" />
                            </div>
                            <div class="ec-service-desc">
                                <h2>Best Online Support</h2>
                                <p>Hours: 8AM -11PM</p>
                            </div>
                        </div>
                    </div>
                    <div class="ec_ser_content ec_ser_content_4 col-sm-12">
                        <div class="ec_ser_inner">
                            <div class="ec-service-image">
                                <img src="{{ asset('frontend') }}/assets/images/icons/service_4_4.svg" class="svg_img ser_svg" alt="" />
                            </div>
                            <div class="ec-service-desc">
                                <h2>Return Policy</h2>
                                <p>Easy & Free Return</p>
                            </div>
                        </div>
                    </div>
                    <div class="ec_ser_content ec_ser_content_5 col-sm-12">
                        <div class="ec_ser_inner">
                            <div class="ec-service-image">
                                <img src="{{ asset('frontend') }}/assets/images/icons/service_4_5.svg" class="svg_img ser_svg" alt="" />
                            </div>
                            <div class="ec-service-desc">
                                <h2>30% money back</h2>
                                <p>For Order Over $100</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ec Service End -->
        </div>
    </div>
</section>
