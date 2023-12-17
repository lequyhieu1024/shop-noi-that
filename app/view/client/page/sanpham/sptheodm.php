<hr>
<div class="product-area section-padding-1 pt-100 pb-125">
    <div class="container-fluid">
        <div class="section-title-12 text-center mb-65">
            <h2>Sản phẩm trong danh mục</h2>
            <p>Những sản phẩm được nhiều người xem nhất</p>
        </div>
        <div class="row">
            <?php foreach ($all_pro_of_cate as $rows) : ?>
                <div class="custom-col-5">
                    <div class="product-wrap mb-50">
                        <div class="product-img default-overlay mb-25">
                            <a href="index.php?redirect=chitietsp&id=<?= $rows['id_san_pham'] ?>">
                                <img class="img-fluid" style="height: 400px;" src="public/image/<?= $rows['anh_san_pham'] ?>" alt="">
                            </a>
                            <div class="product-action product-action-sky product-action-position-1">
                                <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa fa-eye"></i><span>Quick Shop</span></a>
                                <a title="Add to Wishlist" href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a>
                                <a class="icon-blod" title="Add to Compare" href="#"><i class="dlicon arrows-4_compare"></i><span>Add to Compare</span></a>
                                <a title="Add to Cart" href="#"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
                            </div>
                        </div>
                        <div class="product-content-4 product-content-sky title-font-width-400 text-center">
                            <h3><a href="index.php?redirect=chitietsp&id="><?= $rows['ten_san_pham'] ?></a></h3>
                            <div class="product-price product-price-red">
                                <span class="new-price"><?= number_format($rows['gia_tien'], 0) ?> <sup>vnđ</sup></span>
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