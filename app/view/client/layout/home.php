

        <div class="slider-area">
            <div class="container-fluid p-0">
                <div class="main-slider-active-3 owl-carousel slider-dot-position-3 slider-dot-style-2">
                    <div class="single-main-slider slider-animated-1 bg-img slider-height-hm11 align-items-center custom-d-flex" style="background-image:url(public/image/<?=$website['banner_website']; ?> );">
                        <div class="row g-0 width-100-percent">
                            <div class="col-lg-12 col-md-12">
                                <div class="main-slider-content-11-1 text-center">
                                    <h1 class="animated">Scandinavian interior </h1>
                                    <div class="slider-btn-2 slider-btn-2-border-white">
                                        <a class="animated" href="index.php?redirect=chitietsp&id=">SHOP NOW </a>
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
                                        <a class="animated" href="index.php?redirect=chitietsp&id=">SHOP NOW </a>
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
                <div class="row related-product-active owl-carousel">
                    <?php foreach($style_room as $rows): ?>
                        <div class="banner-wrap default-overlay-2 banner-zoom mb-30">
                            <div class="banner-img">
                                <a href="index.php?redirect=chitietsp&id="><img class="img-fluid" style="height:200px" src="public/image/<?=$rows['hinh_anh'] ?>" alt="banner"></a>
                            </div>
                            <div class="banner-content-11 text-center">
                                <h3><a href="index.php?redirect=chitietsp&id="><?=$rows['ten_style']?></a></h3>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <div class="product-area section-padding-1 pb-125">
            <div class="container-fluid">
                <div class="section-title-12 text-center mb-65">
                    <h2>Sản phẩm mới nhất</h2>
                    <p>Sản phẩm mới về có nhiều ưu đãi, hãy mua ngay !</p>
                </div>
                <div class="row">
                    <?php foreach($san_pham as $rows): ?>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="index.php?redirect=chitietsp&id=<?=$rows['id_san_pham']?>">
                                    <img class="img-fluid" style="height: 400px;" src="public/image/<?=$rows['anh_san_pham']?>" alt="">
                                </a>
                                <div class="product-action product-action-sky product-action-position-1">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                                <h3><a href="index.php?redirect=chitietsp&id="><?=$rows['ten_san_pham']?></a></h3>
                                <div class="product-price product-price-red">
                                    <span class="new-price"><?=number_format($rows['gia_tien'], 0 )?> <sup>vnđ</sup></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
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
                    <h2>Nhiều người chú ý</h2>
                    <p>Những sản phẩm được nhiều người xem nhất</p>
                </div>
                <div class="row">
                <?php foreach($san_pham_view_cao as $rows): ?>
                    <div class="custom-col-5">
                        <div class="product-wrap mb-50">
                            <div class="product-img default-overlay mb-25">
                                <a href="index.php?redirect=chitietsp&id=<?=$rows['id_san_pham']?>">
                                    <img class="img-fluid" style="height: 400px;" src="public/image/<?=$rows['anh_san_pham']?>" alt="">
                                </a>
                                <div class="product-action product-action-sky product-action-position-1">
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                    <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                    <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                    <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                                </div>
                            </div>
                            <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                                <h3><a href="index.php?redirect=chitietsp&id="><?=$rows['ten_san_pham']?></a></h3>
                                <div class="product-price product-price-red">
                                    <span class="new-price"><?=number_format($rows['gia_tien'], 0 )?> <sup>vnđ</sup></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
                <div class="pro-view-all-3 text-center">
                    <a href="#">View all product</a>
                </div>
            </div>
        </div>
        <div class="banner-area">
            <div class="banner-slider-active-3 owl-carousel">
                <?php foreach($style_room as $row):?>    
                    <div class="single-banner-slider bg-img pt-180 pb-180" style="background-image:url(public/image/<?=$row['hinh_anh']?>);">
                        <div class="single-banner-slider-wrap">
                            <div class="single-banner-slider-content slider-animated-1">
                                <h3 class="slider-animated-1 custom-scrollbar" style="height:60px;overflow:auto;"><?=$row['ten_style']?></h3>
                                <p class="slider-animated-1 custom-scrollbar" style="max-height:100px;overflow:auto;"><?=$row['mo_ta']?>...</p>
                                <div class="banner-slider-btn">
                                    <a href="#">ĐẶT LỊCH NGAY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach?>
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
        