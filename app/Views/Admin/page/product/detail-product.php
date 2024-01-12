<h1 class="bg-info">
    <a href="index.php?url=list-product"><button class="btn btn-warning mb-2 ml-2"><i class="fa fa-backward"></i> Trở về</button></a>
    Chi tiết sản phẩm
</h1>

<div class="container">
    <div class="col-md-8 input-group mb-3">
        <label class="input-group-text input-group-prepend" id="basic-addon1">Tên sản phẩm</label>
        <input disabled type="text" class="form-control" required value="<?= $detailProduct['ten_san_pham'] ?>" name="ten_san_pham" aria-describedby="basic-addon1">
    </div>
    <div class="col-md-8 input-group mb-3">
        <label class="input-group-text input-group-prepend" id="basic-addon1">Ảnh sản phẩm</label>
        <img class="img-fluid mb-2 ml-2" style="width:100px" src="../../../public/image/<?= $detailProduct['anh_san_pham'] ?>" alt="">
    </div>

    <div class="col-md-8 input-group mb-3">
        <label class="input-group-text input-group-prepend">Mô tả</label>
        <textarea disabled class="form-control" required name="mo_ta" aria-label="With textarea"><?= $detailProduct['mo_ta'] ?></textarea>
    </div>
    <div class="col-md-8 input-group mb-3">
        <label class="input-group-text input-group-prepend" id="basic-addon1">Giá sản phẩm</label>
        <input disabled type="number" class="form-control" required value="<?= $detailProduct['gia_tien'] ?>" name="gia_tien" aria-describedby="basic-addon1">
    </div>
    <div class="col-md-8 input-group mb-3">
        <label class="input-group-text input-group-prepend" id="basic-addon1">Tổng số lượng</label>
        <input disabled type="number" class="form-control" required value="<?= $detailProduct['so_luong'] ?>" name="so_luong" aria-describedby="basic-addon1">
    </div>
    <div class="col-md-8 input-group mb-3">
        <label class="input-group-text input-group-prepend" id="basic-addon1">Số lượt xem</label>
        <input disabled type="number" class="form-control" required value="<?= $detailProduct['so_luot_xem'] ?>" name="so_luot_xen" aria-describedby="basic-addon1">
    </div>
    <div class="col-md-8 input-group mb-3">
        <label class="input-group-text input-group-prepend" id="basic-addon1">Số lượt thích</label>
        <input disabled type="number" class="form-control" required value="<?= $detailProduct['so_luot_thich'] ?>" name="so_luot_thich" aria-describedby="basic-addon1">
    </div>
    <div class="col-md-8 input-group mb-3">
        <label class="input-group-text input-group-prepend" id="basic-addon1">Kích thước</label>
        <input disabled type="text" class="form-control" value="<?= $detailProduct['kich_thuoc'] ?>" required name="kich_thuoc_bien_the" placeholder="Dài x Rộng x Cao (đơn vị Cen-ti-met). VD: 20x30x50 cm" aria-describedby="basic-addon1">
    </div>
    <div class="col-md-8 input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text">Thuộc về danh mục</label>
        </div>
        <input disabled type="text" class="form-control" value="<?= $detailProduct['ten_danh_muc'] ?>" required name="kich_thuoc_bien_the" placeholder="Dài x Rộng x Cao (đơn vị Cen-ti-met). VD: 20x30x50 cm" aria-describedby="basic-addon1">
    </div>
    <div class="col-md-8 input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text">Thuộc về thương hiệu</label>
        </div>
        <input disabled type="text" class="form-control" value="<?= $detailProduct['ten_thuong_hieu'] ?>" required name="kich_thuoc_bien_the" placeholder="Dài x Rộng x Cao (đơn vị Cen-ti-met). VD: 20x30x50 cm" aria-describedby="basic-addon1">
    </div>
    <div class="col-md-8 input-group">
        <div class="input-group-prepend">
            <label class="input-group-text">Show sản phẩm</label>
        </div>
        <select disabled class="custom-select" required name="show_san_pham" id="inputGroupSelect01">
            <option value="1">Hiện</option>
            <option value="0">Ẩn</option>
        </select>
    </div>
</div>
<br>

<!-- FORM BIẾN THỂ -->

<?php include "page/variant/addbt.php"; ?>
<!-- DANH SÁCH BIẾN THỂ -->

<?php
if (!empty($load_all_bien_the)) {
    include "page/variant/listbt.php";
}
?>