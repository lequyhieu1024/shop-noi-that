<h1 class="bg-info">Sửa navbar</h1><br>
<?php 
    foreach($listnb as $row):
        extract($row);
?>

<form action="" method="post">
    <div class="col-md-6 input-group mb-4">
        <div class="input-group-prepend">
            <label class="input-group-text">Tên navbar</label>
        </div>
        <input type="text" name="ten_navbar" value="<?=$ten_navbar?>" class="form-control" required>
    </div>
    <div class="col-md-6 input-group mb-4">
        <div class="input-group-prepend">
            <label class="input-group-text">Link navbar</label>
        </div>
        <input type="text" name="link_navbar" value="<?=$link_navbar?>" class="form-control" required>
    </div>
    <input type="submit" name="editnb" class="btn btn-primary" value="Cập nhật">
</form>
<?php endforeach ?>
<br>
<h2 class="text-danger"><?= $alert ?></h2>
<a href="index.php?act=listnb"><button>Xem danh sách navbar</button></a>