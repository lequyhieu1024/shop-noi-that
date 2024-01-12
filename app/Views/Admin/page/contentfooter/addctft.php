<h1 class="bg-info">Thêm content footer</h1><br>
<form action="" method="post">
    <div class="col-md-6 input-group mb-4">
        <div class="input-group-prepend">
            <label class="input-group-text">Tiêu đề content</label>
        </div>
        <input type="text" name="content" class="form-control" required placeholder="vd: về chúng tôi, chính sách , ...">
    </div>
    <div class="col-md-6 input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text">Thuộc cột footer</label>
        </div>
        <select class="custom-select" name="id_footer" id="inputGroupSelect01">
            <?php foreach($listft as $rows):?>
                <option value="<?=$rows['id_footer']?>"><?=$rows['title_footer'] ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <input type="submit" name="addctft" class="btn btn-primary" value="Thêm content">
</form>
<br>
<h2 class="text-danger"><?= $alert ?></h2>
<a href="index.php?act=listctft"><button>Xem danh sách</button></a>