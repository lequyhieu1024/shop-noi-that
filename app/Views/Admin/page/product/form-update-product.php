<h1 class="bg-info">Cập nhật sản phẩm</h1><br>
<?php
//  print_r($getOneProduct) 
?>
<div class="container-addsp">
    <form action="?url=update-product&id=<?= $row['id_san_pham'] ?>" method="post" enctype="multipart/form-data">
        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Tên sản phẩm</label>
            <input type="text" class="form-control" required value="<?= $row['ten_san_pham'] ?>" name="ten_san_pham" aria-describedby="basic-addon1">
        </div>
        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Ảnh sản phẩm</label>
            <input type="file" class="form-control" name="anh_san_pham" aria-describedby="basic-addon1">
        </div>
        <h6 class="ml-2"><b>Ảnh hiện tại:</b></h6><img class="img-fluid mb-2 ml-2" style="width:100px" src="../../../public/image/<?= $row['anh_san_pham'] ?>" alt="">

        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend">Mô tả</label>
            <textarea class="form-control" required name="mo_ta" aria-label="With textarea"><?= $row['mo_ta'] ?></textarea>
        </div>
        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Giá sản phẩm</label>
            <input type="number" class="form-control" required value="<?= $row['gia_tien'] ?>" name="gia_tien" aria-describedby="basic-addon1">
        </div>
        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Tổng số lượng</label>
            <input type="number" class="form-control" required value="<?= $row['so_luong'] ?>" name="so_luong" aria-describedby="basic-addon1">
        </div>
        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Kích thước</label>
            <input type="text" class="form-control" value="<?= $row['kich_thuoc'] ?>" required name="kich_thuoc" placeholder="Dài x Rộng x Cao (đơn vị Cen-ti-met). VD: 20x30x50 cm" aria-describedby="basic-addon1">
        </div>
        <div class="col-md-8 input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Thuộc về danh mục</label>
            </div>
            <select class="custom-select" required name="id_danh_muc" id="inputGroupSelect01">
                <?php foreach ($categories as $rowz) : ?>
                    <option value="<?= $rowz['id_danh_muc'] ?>" <?= ($rowz['id_danh_muc'] == $rowz['id_danh_muc']) ? 'selected' : '' ?>><?= $rowz['ten_danh_muc'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="col-md-8 input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Thuộc về thương hiệu</label>
            </div>
            <select class="custom-select" required name="id_thuong_hieu" id="inputGroupSelect01">
                <?php foreach ($brands as $rows) : ?>
                    <option value="<?= $rows['id_thuong_hieu'] ?>" <?= ($rows['id_thuong_hieu'] == $rows['id_thuong_hieu']) ? 'selected' : '' ?>><?= $rows['ten_thuong_hieu'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="col-md-8 input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Show sản phẩm</label>
            </div>
            <select class="custom-select" required name="show_san_pham" id="inputGroupSelect01">
                <option value="1" <?= ($row['show_san_pham'] == 1) ? "selected" : "" ?>>Hiện</option>
                <option value="0" <?= ($row['show_san_pham'] == 0) ? "selected" : "" ?>>Ẩn</option>
            </select>
        </div>
        <input type="submit" required name="editsp" class="btn btn-primary" value="Cập nhật">
    </form>
    <a href="index.php?url=list-product"><button>Hủy thay đổi</button></a>
</div>