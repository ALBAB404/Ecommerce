<section class="section ec-category-section section-space-p">
    <div class="container">
        <div class="row d-none">
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="ec-title">Top Category</h2>
                </div>
            </div>
        </div>
        <div class="row margin-minus-b-15 margin-minus-t-15">
            <div id="ec-cat-slider" class="ec-cat-slider owl-carousel">
                @foreach ($categories as $category)
                    <div class="ec_cat_content ec_cat_content_1">
                        <div class="ec_cat_inner ec_cat_inner-1">
                            <div class="ec-category-image">
                                <img src="{{ asset($category->image) }}" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <h3>{{ $category->title }}<span title="Category Items">({{ $category->product_count }})</span></h3>
                                <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
    </div>
</section>
