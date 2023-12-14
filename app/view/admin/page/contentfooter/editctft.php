<h1 class="bg-info">Sửa content</h1><br>

<!-- Duyệt dữ liệu vào input -->
<?php
foreach ($listctft as $rows) :
    extract($rows);
?>

    <form action="" method="post">
        <div class="col-md-6 input-group mb-4">
            <div class="input-group-prepend">
                <label class="input-group-text">Content</label>
            </div>
            <input type="text" name="content" class="form-control" value="<?= $content ?>" required>
        </div>
        <div class="col-md-6 input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Thuộc về</label>
            </div>
            <select class="custom-select" name="id_footer" id="inputGroupSelect01">
                <?php foreach($listft as $rows): ?>
                    <option value="<?=$rows['id_footer']?>" <?php echo ($rows['id_footer'] == $id_footer) ? "selected" : "" ?>><?=$rows['title_footer']?></option>
                <?php endforeach ?>
            </select>
        </div>

        <input type="submit" name="editctft" class="btn btn-primary" value="Cập nhật">
    </form>
    <!-- đóng duyệt -->
<?php endforeach ?>
<br>
<h2 class="text-danger"><?= $alert ?></h2>
<a href="index.php?act=listctft"><button>Hủy thay đổi</button></a>
