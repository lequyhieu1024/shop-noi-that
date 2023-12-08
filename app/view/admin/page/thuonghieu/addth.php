<h1 class="bg-info">Thêm thương hiệu</h1><br>
<form action="" method="post" enctype="multipart/form-data">
    <div class="col-md-6 input-group mb-4">
        <div class="input-group-prepend">
            <label class="input-group-text">Tên thương hiệu</label>
        </div>
        <input type="text" name="ten_thuong_hieu" class="form-control" required placeholder="Thương hiệu của sản phẩm">
    </div>
    <div class="col-md-6 input-group mb-4">
        <div class="input-group-prepend">
            <label class="input-group-text">Ảnh thương hiệu</label>
        </div>
        <input type="file" name="anh_thuong_hieu" class="form-control" required>
    </div>
    <div class="col-md-6 input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text">Show thương hiệu</label>
        </div>
        <select class="custom-select" name="show_thuong_hieu" id="inputGroupSelect01">
            <option value="1">Hiện</option>
            <option value="0">Ẩn</option>
        </select>
    </div>
    <input type="submit" name="addth" class="btn btn-primary" value="Thêm thương hiệu">
</form>
<br>
<h2 class="text-danger"><?= $alert ?></h2>
<a href="index.php?act=listth"><button>Xem danh sách thương hiệu</button></a>