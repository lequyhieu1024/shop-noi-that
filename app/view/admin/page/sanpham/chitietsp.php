<h1 class="bg-info">
<a href="index.php?act=listsp"><button class="btn btn-warning mb-2 ml-2"><i class="fa fa-backward"></i> Trở về</button></a>
Chi tiết sản phẩm 
</h1>

<?php
foreach ($load_one_sp as $rows) :
    extract($rows);
?>

    <div class="container">
        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Tên sản phẩm</label>
            <input disabled type="text" class="form-control" required value="<?= $ten_san_pham ?>" name="ten_san_pham" aria-describedby="basic-addon1">
        </div>
        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Ảnh sản phẩm</label>
            <img class="img-fluid mb-2 ml-2" style="width:100px" src="../../../public/image/<?= $anh_san_pham ?>" alt="">
        </div>

        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend">Mô tả</label>
            <textarea disabled class="form-control" required name="mo_ta" aria-label="With textarea"><?= $mo_ta ?></textarea>
        </div>
        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Giá sản phẩm</label>
            <input disabled type="number" class="form-control" required value="<?=$gia_tien?>" name="gia_tien" aria-describedby="basic-addon1">
        </div>
        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Tổng số lượng</label>
            <input disabled type="number" class="form-control" required value="<?= $so_luong ?>" name="so_luong" aria-describedby="basic-addon1">
        </div>
        <div class="col-md-8 input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Thuộc về danh mục</label>
            </div>
            <select disabled class="custom-select" required name="id_danh_muc" id="inputGroupSelect01">
                <?php foreach ($listdm as $row) : ?>
                    <option value="<?= $row['id_danh_muc'] ?>" <?= ($rows['id_danh_muc'] == $id_danh_muc) ? 'selected' : '' ?>><?= $row['ten_danh_muc'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="col-md-8 input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Thuộc về thương hiệu</label>
            </div>
            <select disabled class="custom-select" required name="id_thuong_hieu" id="inputGroupSelect01">
                <?php foreach ($listth as $rows) : ?>
                    <option value="<?= $rows['id_thuong_hieu'] ?>" <?= ($rows['id_thuong_hieu'] == $id_thuong_hieu) ? 'selected' : '' ?>><?= $rows['ten_thuong_hieu'] ?></option>
                <?php endforeach ?>
            </select>
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

<?php include "page/bienthe/addbt.php"; ?>
<?php endforeach ?> 
<!-- DANH SÁCH BIẾN THỂ -->

<?php 
    if(!empty($load_all_bien_the)){
        include "page/bienthe/listbt.php";
    }
?>
