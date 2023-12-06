<h1 class="bg-info">Thêm danh mục</h1><br>

<!-- Duyệt dữ liệu vào input -->
<?php
foreach ($listdm as $rows) :
    extract($rows);
?>

    <form action="" method="post">
        <div class="col-md-6 input-group mb-4">
            <div class="input-group-prepend">
                <label class="input-group-text">Tên danh mục</label>
            </div>
            <input type="text" name="ten_danh_muc" class="form-control" value="<?= $ten_danh_muc ?>" required placeholder="ví dụ: giường, tủ, bàn, ghế ...">
        </div>
        <div class="col-md-6 input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Show danh mục</label>
            </div>
            <select class="custom-select" name="show_danh_muc" id="inputGroupSelect01">
                <option value="1" <?php echo ($show_danh_muc == 1) ? "selected" : "" ?>>Hiện</option>
                <option value="0" <?php echo ($show_danh_muc == 0) ? "selected" : "" ?>>Ẩn</option>
            </select>
        </div>

        <input type="submit" name="editdm" class="btn btn-primary" value="Cập nhật">
    </form>
    <!-- đóng duyệt -->
<?php endforeach ?>
<br>
<h2 class="text-danger"><?= $alert ?></h2>
