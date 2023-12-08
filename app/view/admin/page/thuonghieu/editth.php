<h1 class="bg-info">Cập nhật thương hiệu</h1><br>

<!-- Duyệt dữ liệu vào input -->
<?php
foreach ($listth as $rows) :
    extract($rows);
?>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-6 input-group mb-4">
            <div class="input-group-prepend">
                <label class="input-group-text">Tên thương hiệu</label>
            </div>
            <input type="text" name="ten_thuong_hieu" class="form-control" value="<?= $ten_thuong_hieu ?>" required placeholder="Thương hiệu của sản phẩm">
        </div>
        <div class="col-md-6 input-group mb-4">
            <div class="input-group-prepend">
                <label class="input-group-text">Ảnh thương hiệu</label>
            </div>
            <input type="file" name="anh_thuong_hieu" class="form-control">
        </div>
        <h6 class="ml-3"><b>Ảnh hiện tại:</b></h6> <img class="mb-3 ml-3" style="width:180px; height:100px" src="../../../public/image/<?=$anh_thuong_hieu?>">
        <div class="col-md-6 input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Show thương hiệu</label>
            </div>
            <select class="custom-select" name="show_thuong_hieu" id="inputGroupSelect01">
                <option value="1" <?php echo ($show_thuong_hieu == 1) ? "selected" : "" ?>>Hiện</option>
                <option value="0" <?php echo ($show_thuong_hieu == 0) ? "selected" : "" ?>>Ẩn</option>
            </select>
        </div>

        <input type="submit" name="editth" class="btn btn-primary" value="Cập nhật">
    </form>
    <!-- đóng duyệt -->
<?php endforeach ?>
<br>
<h2 class="text-danger"><?= $alert ?></h2>