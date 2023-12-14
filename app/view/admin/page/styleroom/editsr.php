<h1 class="bg-info">Cập nhật style</h1><br>

<!-- Duyệt dữ liệu vào input -->
<?php
foreach ($listsr as $rows) :
    extract($rows);
?>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-6 input-group mb-4">
            <div class="input-group-prepend">
                <label class="input-group-text">Tên style</label>
            </div>
            <input type="text" name="ten_style" class="form-control" value="<?= $ten_style ?>" required >
        </div>
        <div class="col-md-6 input-group mb-4">
            <div class="input-group-prepend">
                <label class="input-group-text">Ảnh style</label>
            </div>
            <input type="file" name="hinh_anh" class="form-control">
        </div>
        <h6 class="ml-3"><b>Ảnh hiện tại:</b></h6> <img class="mb-3 ml-3" style="width:180px; height:100px" src="../../../public/image/<?= $hinh_anh ?>">
        <div class="col-md-6 input-group mb-4">
            <div class="input-group-prepend">
                <label class="input-group-text">Mô tả</label>
            </div>
            <input type="text" name="mo_ta" value="<?=$mo_ta?>" class="form-control" required>
        </div>
        <div class="col-md-6 input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Show style</label>
            </div>
            <select class="custom-select" name="show_style" id="inputGroupSelect01">
                <option value="1" <?php echo ($show_style == 1) ? "selected" : "" ?>>Hiện</option>
                <option value="0" <?php echo ($show_style == 0) ? "selected" : "" ?>>Ẩn</option>
            </select>
        </div>

        <input type="submit" name="editsr" class="btn btn-primary" value="Cập nhật">
    </form>
    <!-- đóng duyệt -->
<?php endforeach ?>
<br>
<h2 class="text-danger"><?= $alert ?></h2>
<a href="index.php?act=listth"><button>Hủy thay đổi</button></a>