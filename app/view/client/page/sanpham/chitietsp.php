
<div class="breadcrumb-area section-padding-1 bg-gray breadcrumb-ptb-1">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <div class="breadcrumb-title">
                <h2>Chi tiết sản phẩm</h2>
            </div>
            <ul>
                <li>
                    <a href="index.php">Trang chủ</a>
                </li>
                <li><span> &gt; </span></li>
                <li class="active"> Chi tiết sản phẩm </li>
            </ul>
        </div>
    </div>
</div>
<?php foreach ($detail_pro as $row) : endforeach ?>

<form method="post" class="product-details-area section-padding-1 pb-90">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-details-tab">
                    <div class="product-dec-right pro-dec-big-img-slider">
                        <!-- duyệt biến thể -->
                        <div class="easyzoom-style">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="public/image/<?= $row['anh_san_pham'] ?>">
                                    <img src="public/image/<?= $row['anh_san_pham'] ?>" alt="">
                                </a>
                            </div>
                            <a class="easyzoom-pop-up img-popup" href="public/image/<?= $row['anh_san_pham'] ?>"><i class="dlicon ui-1_zoom-in "></i></a>
                        </div>
                        <?php foreach ($variant_pro as $rows) : ?>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="public/image/<?= $rows['anh_bien_the'] ?>">
                                        <img src="public/image/<?= $rows['anh_bien_the'] ?>" alt="">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup" href="public/image/<?= $rows['anh_bien_the'] ?>"><i class="dlicon ui-1_zoom-in "></i></a>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <div class="product-dec-slider product-dec-left">
                        <div class="product-dec-small active">
                            <img src="public/image/<?= $row['anh_san_pham'] ?>" alt="">
                        </div>
                        <!-- duyệt biến thể -->
                        <?php foreach ($variant_pro as $rows) : ?>
                            <div class="product-dec-small active">
                                <img src="public/image/<?= $rows['anh_bien_the'] ?>" alt="">
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="product-details-col-72">
                        <div class="product-details-content p-dec-content-edit">
                            <div class="pro-dec-next-prev">
                                <a class="prev" href="#"><i class="dlicon arrows-1_tail-left"></i></a>
                                <a class="next" href="#"><i class="dlicon arrows-1_tail-right"></i></a>
                            </div>
                            <h2 class="uppercase"><?= $row['ten_san_pham'] ?></h2>
                            <div class="product-details-ratting-wrap">
                                <div class="product-details-ratting">
                                    <i class="yellow fa fa-star"></i>
                                    <i class="yellow fa fa-star"></i>
                                    <i class="yellow fa fa-star"></i>
                                    <i class="yellow fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="#"> (1 customer review)</a>
                            </div>
                            <h3> <?= number_format($row['gia_tien'], 0) ?><sup>vnđ</sup></h3>
                            <div class="product-details-peragraph">
                                <ul>
                                    <li style="list-style:none">
                                        <button name="mau_sac_bien_the" class="text-center color-variant-button" data-variant-type="default" style="border: 1px solid #F2EFEF; width: 90px;">
                                            <img src="public/image/<?= $row['anh_san_pham'] ?>" style="height: 40px; width: 80px;" alt="">
                                            <p>Mặc định</p>
                                        </button>
                                        <?php if (!empty($variant_pro)) : ?>
                                            <?php foreach ($variant_pro as $rows) : ?>
                                                <button name="mau_sac_bien_the" class="text-center color-variant-button" data-variant-type="<?= $rows['mau_sac_bien_the'] ?>" style="border: 1px solid #F2EFEF; width: 90px;">
                                                    <img src="public/image/<?= $rows['anh_bien_the'] ?>" style="height: 40px; width: 80px;" alt="">
                                                    <p><?= $rows['mau_sac_bien_the'] ?></p>
                                                </button>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </li>
                                    <li>Kích thước: <?= $row['kich_thuoc'] ?> cm</li>
                                </ul>
                            </div>
                            <div class="product-details-action-wrap">
                                <div class="product-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                    </div>
                                </div>
                                <div class="product-details-cart">
                                    <a title="Add to cart" href="index.php?redirect=checkout">Add to cart</a>
                                </div>
                                <div class="product-details-wishlist">
                                    <a title="Add to wishlist" href="#"><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="product-details-compare">
                                    <a title="Add to compare" href="#"><i class="dlicon arrows-4_compare"></i></a>
                                </div>
                            </div>
                            <div class="product-details-meta">
                                <span>Danh mục : <a href="index.php?redirect=sptheodm&id=<?= $row['id_danh_muc'] ?>"><?= $row['ten_danh_muc'] ?></a></span>
                                <span>Thương hiệu: <a href="#"><?= $row['ten_thuong_hieu'] ?></a></span>
                            </div>
                            <div class="social-icon-style-3">
                                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                <a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
                                <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-details-col-28">
                        <div class="pro-details-sidebar-active slider-nav-style-3 owl-carousel">
                            <div class="single-pro-details-sidebar">
                                <a href="#"><img src="public/assets/images/product-details/pro-details-sidebar-1.jpg" alt=""></a>
                                <div class="pro-details-sidebar-content">
                                    <h4><a href="#">NEW <br>LONDON</a></h4>
                                    <p>Off 20% for all</p>
                                </div>
                            </div>
                            <div class="single-pro-details-sidebar">
                                <a href="#"><img src="public/assets/images/product-details/pro-details-sidebar-2.jpg" alt=""></a>
                                <div class="pro-details-sidebar-content">
                                    <h4><a href="#">NEW <br>LONDON</a></h4>
                                    <p>Off 20% for all</p>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-subscribe-wrap">
                            <div class="sidebar-subscribe-content text-center">
                                <i class="dlicon ui-1_email-84"></i>
                                <h5>Join Our Newsletter</h5>
                                <p>Sale up to 20% off for your next purchase in this month!</p>
                            </div>
                            <div id="mc_embed_signup" class="sidebar-subscribe-form">
                                <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input class="email" type="email" required="" placeholder=" email address…" name="EMAIL" value="">
                                        <div class="mc-news" aria-hidden="true">
                                            <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                        </div>
                                        <div class="clear">
                                            <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="description-review-area section-padding-7 pb-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="description-review-wrapper">
                    <div class="description-review-topbar nav">
                        <a class="active" data-bs-toggle="tab" href="#des-details1">Mô tả</a>
                        <a data-bs-toggle="tab" href="#des-details3">Đánh giá (1)</a>
                        <a data-bs-toggle="tab" href="#des-details4"> Thương hiệu</a>
                        <a data-bs-toggle="tab" href="#des-details5">Bài viết</a>
                    </div>
                    <div class="tab-content description-review-bottom">
                        <div id="des-details1" class="tab-pane active">
                            <div class="product-description-wrapper">
                                <div class="row">
                                    <!-- <div class="product-dec-col-38">
                                        <div class="pro-details-banner">
                                            <a class="video-popup" href="https://player.vimeo.com/video/181061053?autoplay=1&amp;byline=0&amp;collections=0"><img src="public/assets/images/product-details/pro-details-banner.jpg" alt=""></a>
                                        </div>
                                    </div> -->
                                    <div class="product-dec-col-11">
                                        <div class="product-dec-content">
                                            <!-- <p><?= $row['mo_ta'] ?></p> -->
                                            <ul>
                                                <li><?= $row['mo_ta'] ?></li>
                                                <!-- <li><?= $row['mo_ta'] ?></li> -->
                                            </ul>
                                            <!-- <p><?= $row['mo_ta'] ?></p> -->
                                        </div>
                                        <div class="additional-info product-dec-content">
                                            <ul>
                                                <li><span>Kích thước</span> <?= ' - ' . $row['kich_thuoc'] ?> cm</li>
                                                <li><span>Thương hiệu</span><?= ' - ' . $row['ten_thuong_hieu'] ?></li>
                                                <li><span>Màu sắc</span>
                                                    <?php if (!empty($variant_pro)) {
                                                        foreach ($variant_pro as $rows) :
                                                            echo ' - ' . $rows['mau_sac_bien_the'];
                                                        endforeach;
                                                    } else {
                                                        echo '- Mặc định';
                                                    } ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="additional-info">
                                <ul>
                                    <li><span>Kích thước</span> <?= ' - ' . $row['kich_thuoc'] ?> cm</li>
                                    <li><span>Thương hiệu</span><?= ' - ' . $row['ten_thuong_hieu'] ?></li>
                                    <li><span>Màu sắc</span>
                                        <?php if (!empty($variant_pro)) {
                                            foreach ($variant_pro as $rows) :
                                                echo ' - ' . $rows['mau_sac_bien_the'];
                                            endforeach;
                                        } else {
                                            echo '- Mặc định';
                                        } ?>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                        <div id="des-details3" class="tab-pane ">
                            <div class="review-wrapper">
                                <h2>1 review for Sleeve Button Cowl Neck</h2>
                                <div class="single-review">
                                    <div class="review-img">
                                        <img src="public/assets/images/product-details/client-1.jpg" alt="">
                                    </div>
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-name">
                                                <h5><span>John Snow</span> - March 14, 2023</h5>
                                            </div>
                                            <div class="review-rating">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class=" fa fa-star"></i>
                                            </div>
                                        </div>
                                        <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ratting-form-wrapper">
                                <span>Add a Review</span>
                                <p>Your email address will not be published. Required fields are marked <span>*</span></p>
                                <div class="ratting-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6">
                                                <div class="rating-form-style mb-20">
                                                    <label>Name <span>*</span></label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="rating-form-style mb-20">
                                                    <label>Email <span>*</span></label>
                                                    <input type="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="star-box-wrap">
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="rating-form-style mb-20">
                                                    <label>Your review <span>*</span></label>
                                                    <textarea name="Your Review"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-submit">
                                                    <input type="submit" value="Submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="des-details4" class="tab-pane ">
                            <div class="pro-dec-brand-wrap">
                                <div class="row">
                                    <div class="ms-auto me-auto col-lg-10">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-6 col-sm-5">
                                                <div class="pro-dec-brand-img text-center">
                                                    <img src="public/image/<?= $row['anh_thuong_hieu'] ?>" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-7">
                                                <div class="pro-dec-brand-content">
                                                    <p><?= $row['ten_thuong_hieu'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="des-details5" class="tab-pane">
                            <div class="about-shiping-content">
                                <p>Nunc lacus elit, faucibus ac laoreet sed, dapibus ac mi. Maecenas eu ante a elit tempus fermentum. Aliquam commodo tincidunt semper. Phasellus accumsan, justo ac mollis pharetra, ex dui pharetra nisl, a scelerisque ipsum nulla ac sem. Cras eu risus urna. Duis lorem sapien, congue eget nisl sit amet, rutrum faucibus elit.</p>
                                <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                <p>Nunc lacus elit, faucibus ac laoreet sed, dapibus ac mi. Maecenas eu ante a elit tempus fermentum. Aliquam commodo tincidunt semper. Phasellus accumsan, justo ac mollis pharetra, ex dui pharetra nisl, a scelerisque ipsum nulla ac sem. Cras eu risus urna. Duis lorem sapien, congue eget nisl sit amet, rutrum faucibus elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOAD SẢN PHẨM KHÁC -->
<div class="related-product-area section-padding-1 pb-95">
    <div class="container-fluid">
        <div class="section-title-6 mb-50">
            <h2>Có thể bạn sẽ thích</h2>
        </div>
        <div class="related-product-active owl-carousel">
            <?php foreach($newest_pro as $row): ?>
            <div class="product-wrap">
                <div class="product-img default-overlay mb-25">
                    <a href="index.php?redirect=chitietsp&id=<?=$row['id_san_pham']?>">
                        <img class="default-img" src="public/image/<?=$row['anh_san_pham']?>" alt="">
                        <!-- <img class="hover-img" src="public/assets/images/product/product-3-2.jpg" alt=""> -->
                    </a>
                    <div class="product-action product-action-position-1">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                    </div>
                </div>
                <div class="product-content-2 title-font-width-400 text-center">
                    <h3><a href="index.php?redirect=chitietsp&id="><?=$row['ten_san_pham']?></a></h3>
                    <div class="product-price">
                        <span class="new-price text-danger"><?=number_format($row['gia_tien'],0)?> <sup>vnđ</sup></span>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<div class="related-product-area section-padding-1 pb-95">
    <div class="container-fluid">
        <div class="section-title-6 mb-50">
            <h2>Sản phẩm liên quan</h2>
        </div>
        <div class="related-product-active owl-carousel">
            <?php foreach($related_pro as $row): ?>
            <div class="product-wrap">
                <div class="product-img default-overlay mb-25">
                    <a href="index.php?redirect=chitietsp&id=<?=$row['id_san_pham']?>">
                        <img class="default-img" src="public/image/<?=$row['anh_san_pham']?>" alt="">
                        <!-- <img class="hover-img" src="public/assets/images/product/product-3-2.jpg" alt=""> -->
                    </a>
                    <div class="product-action product-action-position-1">
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                        <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                    </div>
                </div>
                <div class="product-content-2 title-font-width-400 text-center">
                    <h3><a href="index.php?redirect=chitietsp&id="><?=$row['ten_san_pham']?></a></h3>
                    <div class="product-price">
                        <span class="new-price text-danger"><?=number_format($row['gia_tien'],0)?> <sup>vnđ</sup></span>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>