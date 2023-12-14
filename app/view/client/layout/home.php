

        <div class="slider-area">
            <div class="container-fluid p-0">
                <div class="main-slider-active-3 owl-carousel slider-dot-position-3 slider-dot-style-2">
                    <div class="single-main-slider slider-animated-1 bg-img slider-height-hm11 align-items-center custom-d-flex" style="background-image:url(public/image/<?=$website['banner_website']; ?> );">
                        <div class="row g-0 width-100-percent">
                            <div class="col-lg-12 col-md-12">
                                <div class="main-slider-content-11-1 text-center">
                                    <h1 class="animated">Scandinavian interior </h1>
                                    <div class="slider-btn-2 slider-btn-2-border-white">
                                        <a class="animated" href="product-details.html">SHOP NOW </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-main-slider slider-animated-1 bg-img slider-height-hm11 align-items-center custom-d-flex" style="background-image:url(public/image/<?=$website['banner_website']; ?>);">
                        <div class="row g-0 width-100-percent">
                            <div class="col-lg-12 col-md-12">
                                <div class="main-slider-content-11-1 text-center">
                                    <h1 class="animated">Scandinavian interior </h1>
                                    <div class="slider-btn-2 slider-btn-2-border-white">
                                        <a class="animated" href="product-details.html">SHOP NOW </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-area section-padding-1 banner-area-hm11 pt-130 pb-100">
            <div class="container-fluid padding-70-row-col">
                <div class="section-title-12 text-center mb-60">
                    <h2>Đặt lịch thiết kế phòng</h2>
                    <p>Hiện nay, xu hướng thiết kế phòng thường thay đổi theo thời gian và phản ánh sự tiến triển trong thiết kế nội thất. Dưới  <br>đây là một số xu hướng chung về phong cách phòng mà bạn có thể thấy trong thời gian gần đây:</p>
                </div>
                <div class="row">
                    <?php foreach($style_room as $rows): ?>
                    <div class="col-lg-4 col-md-4">
                        <div class="banner-wrap default-overlay-2 banner-zoom mb-30">
                            <div class="banner-img">
                                <a href="product-details.html"><img class="img-fluid" src="public/image/<?=$rows['hinh_anh'] ?>" alt="banner"></a>
                            </div>
                            <div class="banner-content-11 text-center">
                                <h3><a href="product-details.html"><?=$rows['ten_style']?></a></h3>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <div class="product-area section-padding-1 pb-125">
            <div class="container-fluid">
                <div class="section-title-12 text-center mb-65">
                    <h2>New arrival</h2>
                    <p>Class aptent taciti sociosqu ad litora torquent per con</p>
                </div>
                <div class="row">
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="public/assets/images/product/product-32.jpg" alt="">
                                </a>
                                <div class="product-action product-action-sky product-action-position-1">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                                <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                                <div class="product-price product-price-red">
                                    <span class="new-price">$42.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="public/assets/images/product/product-33.jpg" alt="">
                                    <span class="badge-black-before badge-right-0 badge-top-0 badge-pr badge-pt">sale!</span>
                                </a>
                                <div class="product-action product-action-sky product-action-position-1">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                                <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                                <div class="product-price product-price-red">
                                    <span class="old-price">$49.00</span>
                                    <span class="new-price">$42.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="public/assets/images/product/product-34.jpg" alt="">
                                </a>
                                <div class="product-action product-action-sky product-action-position-1">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                                <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                                <div class="product-price product-price-red">
                                    <span class="new-price">$42.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="public/assets/images/product/product-35.jpg" alt="">
                                    <span class="badge-red badge-right-20 badge-top-20 badge-width-height-2 badge-border-radius-100">sale!</span>
                                </a>
                                <div class="product-action product-action-sky product-action-position-1">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                                <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                                <div class="product-price product-price-red">
                                    <span class="new-price">$42.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="public/assets/images/product/product-36.jpg" alt="">
                                </a>
                                <div class="product-action product-action-sky product-action-position-1">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                                <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                                <div class="product-price product-price-red">
                                    <span class="new-price">$42.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="public/assets/images/product/product-37.jpg" alt="">
                                    <span class="badge-black-before badge-right-0 badge-top-0 badge-pr badge-pt">-7.7%</span>
                                </a>
                                <div class="product-action product-action-sky product-action-position-1">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                                <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                                <div class="product-price product-price-red">
                                    <span class="new-price">$42.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="public/assets/images/product/product-38.jpg" alt="">
                                </a>
                                <div class="product-action product-action-sky product-action-position-1">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                                <h3><a href="product-details.html">Mid – Augue et eleifend tincidunt</a></h3>
                                <div class="product-price product-price-red">
                                    <span class="new-price">$42.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="public/assets/images/product/product-39.jpg" alt="">
                                </a>
                                <div class="product-action product-action-sky product-action-position-1">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                                <h3><a href="product-details.html">Home sofa ante a elit</a></h3>
                                <div class="product-price product-price-red">
                                    <span class="new-price">$42.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="public/assets/images/product/product-40.jpg" alt="">
                                </a>
                                <div class="product-action product-action-sky product-action-position-1">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                                <h3><a href="product-details.html">Century sofa auctor iaculis</a></h3>
                                <div class="product-price product-price-red">
                                    <span class="new-price">$42.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="public/assets/images/product/product-41.jpg" alt="">
                                </a>
                                <div class="product-action product-action-sky product-action-position-1">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                                <h3><a href="product-details.html">Mid – Century Sofa</a></h3>
                                <div class="product-price product-price-red">
                                    <span class="new-price">$42.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-view-all-3 text-center">
                    <a href="#">View all product</a>
                </div>
            </div>
        </div>
        <div class="choose-area jarallax parallax-img section-padding-1 pt-130 pb-100" style="background-image:url(public/assets/images/bg/bg-10.jpg);">
            <div class="container-fluid">
                <div class="section-title-12 title-12-white text-center mb-65">
                    <h2>Why Choose Us</h2>
                    <p>Class aptent taciti sociosqu ad litora torquent per con</p>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-choose mb-30">
                            <div class="choose-icon">
                                <i class="dlicon shopping_cart"></i>
                            </div>
                            <div class="choose-content">
                                <h3>Freeship Order Over $100</h3>
                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer condimentum sed mi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-choose mb-30">
                            <div class="choose-icon">
                                <i class="dlicon education_award-55"></i>
                            </div>
                            <div class="choose-content">
                                <h3>Long-term warranty policy</h3>
                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer condimentum sed mi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-choose mb-30">
                            <div class="choose-icon">
                                <i class="dlicon envir_home"></i>
                            </div>
                            <div class="choose-content">
                                <h3>Environmental friendliness</h3>
                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer condimentum sed mi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area section-padding-1 pt-130 pb-125">
            <div class="container-fluid">
                <div class="section-title-12 text-center mb-65">
                    <h2>Top Sale This Week</h2>
                    <p>Class aptent taciti sociosqu ad litora torquent per con</p>
                </div>
                <div class="row">
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="public/assets/images/product/product-42.jpg" alt="">
                                </a>
                                <div class="product-action product-action-sky product-action-position-1">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                                <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                                <div class="product-price product-price-red">
                                    <span class="new-price">$42.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="public/assets/images/product/product-43.jpg" alt="">
                                    <span class="badge-black-before badge-right-0 badge-top-0 badge-pr badge-pt">sale!</span>
                                </a>
                                <div class="product-action product-action-sky product-action-position-1">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                                <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                                <div class="product-price product-price-red">
                                    <span class="old-price">$49.00</span>
                                    <span class="new-price">$42.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="public/assets/images/product/product-44.jpg" alt="">
                                </a>
                                <div class="product-action product-action-sky product-action-position-1">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                                <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                                <div class="product-price product-price-red">
                                    <span class="new-price">$42.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="public/assets/images/product/product-45.jpg" alt="">
                                    <span class="badge-red badge-right-20 badge-top-20 badge-width-height-2 badge-border-radius-100">sale!</span>
                                </a>
                                <div class="product-action product-action-sky product-action-position-1">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                                <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                                <div class="product-price product-price-red">
                                    <span class="new-price">$42.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="public/assets/images/product/product-46.jpg" alt="">
                                </a>
                                <div class="product-action product-action-sky product-action-position-1">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                                <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                                <div class="product-price product-price-red">
                                    <span class="new-price">$42.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="public/assets/images/product/product-47.jpg" alt="">
                                    <span class="badge-black-before badge-right-0 badge-top-0 badge-pr badge-pt">-7.7%</span>
                                </a>
                                <div class="product-action product-action-sky product-action-position-1">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                                <h3><a href="product-details.html">Dapibus ac mi shoes</a></h3>
                                <div class="product-price product-price-red">
                                    <span class="new-price">$42.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="public/assets/images/product/product-48.jpg" alt="">
                                </a>
                                <div class="product-action product-action-sky product-action-position-1">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                                <h3><a href="product-details.html">Mid – Augue et eleifend tincidunt</a></h3>
                                <div class="product-price product-price-red">
                                    <span class="new-price">$42.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="public/assets/images/product/product-49.jpg" alt="">
                                </a>
                                <div class="product-action product-action-sky product-action-position-1">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                                <h3><a href="product-details.html">Home sofa ante a elit</a></h3>
                                <div class="product-price product-price-red">
                                    <span class="new-price">$42.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="public/assets/images/product/product-50.jpg" alt="">
                                </a>
                                <div class="product-action product-action-sky product-action-position-1">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                                <h3><a href="product-details.html">Century sofa auctor iaculis</a></h3>
                                <div class="product-price product-price-red">
                                    <span class="new-price">$42.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="public/assets/images/product/product-51.jpg" alt="">
                                </a>
                                <div class="product-action product-action-sky product-action-position-1">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                                <h3><a href="product-details.html">Mid – Century Sofa</a></h3>
                                <div class="product-price product-price-red">
                                    <span class="new-price">$42.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-view-all-3 text-center">
                    <a href="#">View all product</a>
                </div>
            </div>
        </div>
        <div class="banner-area">
            <div class="banner-slider-active-3 owl-carousel">
                <div class="single-banner-slider bg-img pt-180 pb-180" style="background-image:url(public/assets/images/banner/banner-25.jpg);">
                    <div class="single-banner-slider-wrap">
                        <div class="single-banner-slider-content slider-animated-1">
                            <span>Popular Projects</span>
                            <h3 class="slider-animated-1">Bed Room</h3>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer condimentum sed mi</p>
                            <div class="banner-slider-btn">
                                <a href="#">DISCOVER</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-banner-slider bg-img pt-180 pb-180" style="background-image:url(public/assets/images/banner/banner-26.jpg);">
                    <div class="single-banner-slider-wrap">
                        <div class="single-banner-slider-content slider-animated-1">
                            <span>Popular Projects</span>
                            <h3>Kitchen Decoration</h3>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer condimentum sed mi</p>
                            <div class="banner-slider-btn">
                                <a href="#">DISCOVER</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-banner-slider bg-img pt-180 pb-180" style="background-image:url(public/assets/images/banner/banner-27.jpg);">
                    <div class="single-banner-slider-wrap">
                        <div class="single-banner-slider-content slider-animated-1">
                            <span>Popular Projects</span>
                            <h3>Beautiful Bathroom</h3>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer condimentum sed mi</p>
                            <div class="banner-slider-btn">
                                <a href="#">DISCOVER</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-area section-padding-1 pt-130 pb-125">
            <div class="container-fluid">
                <div class="section-title-12 text-center mb-70">
                    <h2>Clients say</h2>
                </div>
                <div class="testimonial-active owl-carousel">
                    <div class="single-testimonial-2 text-center">
                        <img src="public/assets/images/icon-img/testimonial-icon-02.png" alt="testimonial">
                        <p>Nulla vulputate nulla lectus, in vulputate metus lobortis id. Cras scelerisque urna sed urna tincidunt tempor. Quisque finibus ultrices mauris, sit amet</p>
                        <div class="client-img-2">
                            <img src="public/assets/images/testimonial/client-img-1.jpg" alt="testimonial">
                        </div>
                        <div class="client-info-2">
                            <h3>John Borthwick</h3>
                            <span>Founder & CEO</span>
                        </div>
                    </div>
                    <div class="single-testimonial-2 text-center">
                        <img src="public/assets/images/icon-img/testimonial-icon-02.png" alt="testimonial">
                        <p>Nulla vulputate nulla lectus, in vulputate metus lobortis id. Cras scelerisque urna sed urna tincidunt tempor. Quisque finibus ultrices mauris, sit amet</p>
                        <div class="client-img-2">
                            <img src="public/assets/images/testimonial/client-img-1.jpg" alt="testimonial">
                        </div>
                        <div class="client-info-2">
                            <h3>Jane Bill</h3>
                            <span>Founder & CEO</span>
                        </div>
                    </div>
                    <div class="single-testimonial-2 text-center">
                        <img src="public/assets/images/icon-img/testimonial-icon-02.png" alt="testimonial">
                        <p>Nulla vulputate nulla lectus, in vulputate metus lobortis id. Cras scelerisque urna sed urna tincidunt tempor. Quisque finibus ultrices mauris, sit amet</p>
                        <div class="client-img-2">
                            <img src="public/assets/images/testimonial/client-img-1.jpg" alt="testimonial">
                        </div>
                        <div class="client-info-2">
                            <h3>Mary Scott</h3>
                            <span>Founder & CEO</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-area section-padding-1 bg-gray pt-130 pb-100">
            <div class="container-fluid">
                <div class="section-title-12 text-center mb-70">
                    <h2>latest post</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-wrap-2 mb-30 bg-white">
                            <div class="blog-img-2 mb-50">
                                <a href="blog-details.html"><img src="public/assets/images/blog/blog-5.jpg" alt="blog"></a>
                            </div>
                            <div class="blog-content-2">
                                <h3><a href="blog-details.html">Get Ready Fast For Fall Leaf</a></h3>
                                <div class="blog-meta light-sky-meta">
                                    <ul>
                                        <li><a href="#">December 5, 2023</a></li>
                                        <li>By <a href="#">Joe Doe</a></li>
                                        <li><a href="#">Photography</a></li>
                                    </ul>
                                </div>
                                <p>Chances are unless you are very lucky you will go thru many different relationships before you find your special someone.…</p>
                                <div class="blog-btn-2 blog-btn-2-sky">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-wrap-2 mb-30 bg-white">
                            <div class="blog-img-2 mb-50">
                                <a href="blog-details.html"><img src="public/assets/images/blog/blog-6.jpg" alt="blog"></a>
                            </div>
                            <div class="blog-content-2">
                                <h3><a href="blog-details.html">Toner Cartridge Quality 20</a></h3>
                                <div class="blog-meta light-sky-meta">
                                    <ul>
                                        <li><a href="#">December 5, 2023</a></li>
                                        <li>By <a href="#">Joe Doe</a></li>
                                        <li><a href="#">Trends</a></li>
                                    </ul>
                                </div>
                                <p>Luxury is something everyone deserves from time to time. Such an indulgence can make a vacation a truly rejuvenating experience.…</p>
                                <div class="blog-btn-2 blog-btn-2-sky">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-wrap-2 mb-30 bg-white">
                            <div class="blog-img-2 mb-50">
                                <a href="blog-details.html"><img src="public/assets/images/blog/blog-7.jpg" alt="blog"></a>
                            </div>
                            <div class="blog-content-2">
                                <h3><a href="blog-details.html">Get For Fall Leaf Viewing Trips</a></h3>
                                <div class="blog-meta light-sky-meta">
                                    <ul>
                                        <li><a href="#">December 5, 2023</a></li>
                                        <li>By <a href="#">Joe Doe</a></li>
                                        <li><a href="#">Technology</a></li>
                                    </ul>
                                </div>
                                <p>Chances are unless you are very lucky you will go thru many different relationships before you find your special someone.…</p>
                                <div class="blog-btn-2 blog-btn-2-sky">
                                    <a href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-area section-padding-3 pt-20 pb-20">
            <div class="container-fluid">
                <div class="row">
                    <?php foreach($thuong_hieu as $rows): ?>
                    <div class="col-lg-2 col-md-4 col-6 col-sm-4">
                        <div class="single-brand-logo-2 text-center">
                            <a href="#"><img src="public/image/<?=$rows['anh_thuong_hieu']?>" alt=""></a>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        