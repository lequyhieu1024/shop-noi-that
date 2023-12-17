<h1 class="bg-info">Cập nhật sản phẩm</h1><br>

<?php
foreach ($load_one_sp as $rows) :
    extract($rows);
?>

<div class="container-addsp">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Tên sản phẩm</label>
            <input type="text" class="form-control" required value="<?=$ten_san_pham?>" name="ten_san_pham" aria-describedby="basic-addon1">
        </div>
        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Ảnh sản phẩm</label>
            <input type="file" class="form-control" name="anh_san_pham" aria-describedby="basic-addon1">
        </div>
        <h6 class="ml-2"><b>Ảnh hiện tại:</b></h6><img class="img-fluid mb-2 ml-2" style="width:100px" src="../../../public/image/<?=$anh_san_pham?>" alt="">

        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend">Mô tả</label>
            <textarea class="form-control" required name="mo_ta" aria-label="With textarea"><?=$mo_ta?></textarea>
        </div>
        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Giá sản phẩm</label>
            <input type="number" class="form-control" required value="<?=$gia_tien?>" name="gia_tien" aria-describedby="basic-addon1">
        </div>
        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Tổng số lượng</label>
            <input type="number" class="form-control" required value="<?=$so_luong?>" name="so_luong" aria-describedby="basic-addon1">
        </div>
        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Kích thước</label>
            <input type="text" class="form-control" value="<?=$kich_thuoc?>" required name="kich_thuoc" placeholder="Dài x Rộng x Cao (đơn vị Cen-ti-met). VD: 20x30x50 cm" aria-describedby="basic-addon1">
        </div>
        <div class="col-md-8 input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Thuộc về danh mục</label>
            </div>
            <select class="custom-select" required name="id_danh_muc" id="inputGroupSelect01">
                <?php foreach($listdm as $row):?>
                <option value="<?= $row['id_danh_muc']?>" <?= ($rows['id_danh_muc'] == $id_danh_muc) ? 'selected' : '' ?> ><?= $row['ten_danh_muc'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="col-md-8 input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Thuộc về thương hiệu</label>
            </div>
            <select class="custom-select" required name="id_thuong_hieu" id="inputGroupSelect01">
                <?php foreach($listth as $rows): ?>
                <option value="<?= $rows['id_thuong_hieu']?>" <?= ($rows['id_thuong_hieu'] == $id_thuong_hieu) ? 'selected' : '' ?>><?= $rows['ten_thuong_hieu'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="col-md-8 input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Show sản phẩm</label>
            </div>
            <select class="custom-select" required name="show_san_pham" id="inputGroupSelect01">
                <option value="1">Hiện</option>
                <option value="0">Ẩn</option>
            </select>
        </div>
        <input type="submit" required name="editsp" class="btn btn-primary" value="Cập nhật">
    </form>
    <h2 class="text-danger"><?= $alert ?></h2>
    <a href="index.php?act=listsp"><button>Hủy thay đổi</button></a>
</div>
<?php endforeach ?>