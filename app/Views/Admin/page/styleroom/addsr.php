<h1 class="bg-info">Thêm style</h1><br>
<form action="" method="post" enctype="multipart/form-data">
    <div class="col-md-6 input-group mb-4">
        <div class="input-group-prepend">
            <label class="input-group-text">Tên style</label>
        </div>
        <input type="text" name="ten_style" class="form-control" required placeholder="Kiểu phòng (VD: sang trọng, giản dị, kiểu pháp,...)">
    </div>
    <div class="col-md-6 input-group mb-4">
        <div class="input-group-prepend">
            <label class="input-group-text">Ảnh style</label>
        </div>
        <input type="file" name="hinh_anh" class="form-control" required>
    </div>
    <div class="col-md-6 input-group mb-4">
        <div class="input-group-prepend">
            <label class="input-group-text">Mô tả</label>
        </div>
        <input type="text" name="mo_ta" class="form-control" required placeholder="Mô tả về kiểu phòng">
    </div>
    <div class="col-md-6 input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text">Show style</label>
        </div>
        <select class="custom-select" name="show_style" id="inputGroupSelect01">
            <option value="1">Hiện</option>
            <option value="0">Ẩn</option>
        </select>
    </div>
    <input type="submit" name="addsr" class="btn btn-primary" value="Thêm style">
</form>
<br>
<h2 class="text-danger"><?= $alert ?></h2>
<a href="index.php?act=listsr"><button>Xem danh sách style</button></a>