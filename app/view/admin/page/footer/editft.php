<h1 class="bg-info">Thêm danh mục</h1><br>

<!-- Duyệt dữ liệu vào input -->
<?php
foreach ($listft as $rows) :
    extract($rows);
?>

    <form action="" method="post">
        <div class="col-md-6 input-group mb-4">
            <div class="input-group-prepend">
                <label class="input-group-text">Tiêu đề footer</label>
            </div>
            <input type="text" name="title_footer" class="form-control" value="<?= $title_footer ?>" required>
        </div>
        <input type="submit" name="editft" class="btn btn-primary" value="Cập nhật">
    </form>
    <!-- đóng duyệt -->
<?php endforeach ?>
<br>
<h2 class="text-danger"><?= $alert ?></h2>
<a href="index.php?act=listft"><button>Hủy thay đổi</button></a>
