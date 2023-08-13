<section class="section ec-instagram-section section-space-pt">
    <div class="container">
        <h2 class="d-none">Instagram</h2>
        <div class="ec-insta-wrapper" data-animation="fadeIn">
            <div class="ec-insta-outer">
                <div class="insta-auto">
                    <!-- instagram item -->
                    @foreach ($instragramfeeds as $instragramfeed)
                    <div class="ec-insta-item">
                        <div class="ec-insta-inner">
                            <a href="#" target="_blank"><img src="{{ asset($instragramfeed->image) }}" alt="">

                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
