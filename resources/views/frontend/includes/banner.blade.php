<div class="ec-main-slider section section-space-pb">
    <div class="container">
        <div class="ec-slider swiper-container main-slider-nav main-slider-dot">
        <!-- Main slider -->
        <div class="swiper-wrapper">
            @foreach ($banners as $banner)
                <div class="ec-slide-item swiper-slide d-flex slide-1" style="background-image: url({{ asset($banner->image) }});background-position: center;background-repeat: no-repeat;background-size: cover;">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-sm-12 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h2 class="ec-slide-stitle">{{ $banner->subtitle }}</h2>
                                    <h1 class="ec-slide-title">{{ $banner->title }}</h1>
                                    <div class="ec-slide-desc">
                                        <p>{{ $banner->content }} <b>29</b>.99</p>
                                        <a href="#" class="btn btn-lg btn-primary">{{ $banner->button_text }} <i
                                                class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination swiper-pagination-white"></div>
        <div class="swiper-buttons">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        </div>
</div>
