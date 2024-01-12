<h1 class="bg-info">Thêm danh mục</h1><br>
<form action="?url=add-category" method="post">
    <div class="col-md-6 input-group mb-4">
        <div class="input-group-prepend">
            <label class="input-group-text">Tên danh mục</label>
        </div>
        <input type="text" name="ten_danh_muc" class="form-control" required placeholder="ví dụ: giường, tủ, bàn, ghế ...">
    </div>
    <div class="col-md-6 input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text">Show danh mục</label>
        </div>
        <select class="custom-select" name="show_danh_muc" id="inputGroupSelect01">
            <option value="1">Hiện</option>
            <option value="0">Ẩn</option>
        </select>
    </div>
    <input type="submit" name="adddm" class="btn btn-primary" value="Thêm danh mục">
</form>
<br>
<h2 class="text-success">
    <?php
    if ($alert !== "") :
        echo $alert;
    endif; ?>
</h2>

<a href="index.php?url=list-category"><button>Xem danh sách danh mục</button></a>