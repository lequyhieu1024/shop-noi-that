<footer class="footer-area section-padding-1 bg-black-3">
    <div class="container-fluid">
        <div class="footer-top pt-100 pb-35">
            <div class="row">
                <div class="footer-column footer-width-24-2">
                    <div class="footer-widget footer-info-list-2 footer-contect logo-width footer-info-font-inc mb-30">
                        <a href="index.html">
                            <img src="public/image/<?= $website['logo_website'] ?>" alt="logo">
                        </a>
                        <ul>
                            <li><i class="dlicon ui-1_email-83"></i><?= $website['email_website'] ?></li>
                            <li><i class="dlicon tech-2_rotate"></i><?= $website['phone_website'] ?></li>
                            <li><i class="dlicon ui-1_home-simple"></i> <?= $website['dia_chi_website'] ?></li>
                        </ul>
                    </div>
                </div>
                <?php foreach($footer as $rows):?>
                <div class="footer-column footer-width-13">
                    <div class="footer-widget footer-info-list mb-30 fi-sky-color">
                        <h3 class="footer-title ft-letter-space-inc"><?=$rows['title_footer'] ?></h3>
                        <ul>
                            <li><a href="#">
                                <?php 
                                    $contentsArray = explode(',', $rows['contents']);
                                    foreach ($contentsArray as $content): ?>
                                    <li><a href="#"><?= $content ?></a></li>
                                <?php endforeach; ?>    
                            </a></li>
                        </ul>
                    </div>
                </div>
                <?php endforeach ?>
                <div class="footer-column footer-width-27 mb-30">
                    <div class="contact-page-map">
                        <div id="contact-map">
                            <iframe src="<?=$website['location']?>" style="border:0;width:100%;height:100%;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-botoom">
            <div class="row">
                <div class="col-12">
                    <div class="copyright-2 copyright-sky text-center">
                        <p>© 2021 <a href="https://hasthemes.com/">Toro.</a> All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="support-lists">
    <ul>
        <li><a href="#"><i class="dlicon ui-3_chat-46"></i></a></li>
        <li><a href="#"><i class=" dlicon ui-3_phone"></i></a></li>
        <li><a href="#"><i class="dlicon ui-1_email-85"></i></a></li>
    </ul>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span class="dlicon ui-1_simple-remove" aria-hidden="true"></span></button>
            </div>
            <div class="modal-body">
                <div class="row g-0">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="quickview-slider-active owl-carousel">
                            <a class="img-popup" href="public/assets/images/product/quickview-1.jpg"><img src="public/assets/images/product/quickview-1.jpg" alt=""><span>sold uot</span></a>
                            <a class="img-popup" href="public/assets/images/product/quickview-2.jpg"><img src="public/assets/images/product/quickview-2.jpg" alt=""><span>sold uot</span></a>
                        </div>
                        <!-- Thumbnail Large Image End -->
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-details-content">
                            <div class="pro-dec-next-prev">
                                <a class="prev" href="#"><i class="dlicon arrows-1_tail-left"></i></a>
                                <a class="next" href="#"><i class="dlicon arrows-1_tail-right"></i></a>
                            </div>
                            <h2 class="uppercase">Quilted parka with hood</h2>
                            <h3>$49.00</h3>
                            <div class="product-details-peragraph">
                                <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam libero ac turpis pharetra, in vehicula scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                            </div>
                            <div class="product-details-action-wrap">
                                <div class="product-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                    </div>
                                </div>
                                <div class="product-details-cart">
                                    <a title="Add to cart" href="#">Add to cart</a>
                                </div>
                                <div class="product-details-wishlist">
                                    <a title="Add to wishlist" href="#"><i class="fa fa-heart"></i></a>
                                </div>
                                <div class="product-details-compare">
                                    <a title="Add to compare" href="#"><i class="dlicon arrows-4_compare"></i></a>
                                </div>
                            </div>
                            <div class="product-details-info">
                                <a href="#"><i class="dlicon location_pin"></i>Store availability</a>
                                <a href="#"><i class="dlicon envir_car"></i>Delivery and return</a>
                                <a href="#"><i class="dlicon design_measure-17"></i>Size Guide</a>
                            </div>
                            <div class="product-details-meta">
                                <span>SKU: REF. LA-140</span>
                                <span>Categories: <a href="#">Fashions</a>, <a href="#">Main 01</a>, <a href="#">Main 02</a></span>
                                <span>Tags: <a href="#">Blazer</a>, <a href="#">chair</a>, <a href="#">Coat</a>, <a href="#">dress</a>, <a href="#">light</a>, <a href="#">Living</a>, <a href="#">Main 01</a></span>
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->
</div>

<!-- All JS is here
============================================ -->

<!-- Modernizer JS -->
<script src="public/assets/js/vendor/modernizr-3.11.7.min.js"></script>
<!-- jquery -->
<script src="public/assets/js/vendor/jquery-v3.6.0.min.js"></script>
<!-- Popper JS -->
<script src="public/assets/js/vendor/popper.js"></script>
<!-- Bootstrap JS -->
<script src="public/assets/js/vendor/bootstrap.min.js"></script>
<script src="public/assets/js/plugins/owl-carousel.js"></script>
<script src="public/assets/js/plugins/slick.js"></script>
<script src="public/assets/js/plugins/jarallax.min.js"></script>
<script src="public/assets/js/plugins/countdown.js"></script>
<script src="public/assets/js/plugins/magnific-popup.js"></script>
<script src="public/assets/js/plugins/instafeed.js"></script>
<script src="public/assets/js/plugins/tilt.js"></script>
<script src="public/assets/js/plugins/images-loaded.js"></script>
<script src="public/assets/js/plugins/isotope.js"></script>
<script src="public/assets/js/plugins/scrolloverflow-fullpage.js"></script>
<script src="public/assets/js/plugins/fullpage.js"></script>
<script src="public/assets/js/plugins/jquery-ui.js"></script>
<script src="public/assets/js/plugins/jquery-ui-touch-punch.js"></script>
<script src="public/assets/js/plugins/easyzoom.js"></script>
<script src="public/assets/js/plugins/resizesensor.js"></script>
<script src="public/assets/js/plugins/sticky-sidebar.js"></script>
<script src="public/assets/js/plugins/scrollup.js"></script>
<script src="public/assets/js/plugins/select2.min.js"></script>
<script src="public/assets/js/plugins/cookie.js"></script>
<script src="public/assets/js/plugins/bpopup.js"></script>
<script src="public/assets/js/plugins/wow.js"></script>
<script src="public/assets/js/plugins/ajax-mail.js"></script>
<script src="public/assets/js/button-color-variant.js"></script>
<!-- Main JS -->
<script src="public/assets/js/main.js"></script>
</body>


<!-- Mirrored from htmldemo.net/toro/toro/index-11.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Dec 2023 15:43:15 GMT -->

</html>