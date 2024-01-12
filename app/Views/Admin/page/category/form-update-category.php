<h1 class="bg-info">Cập nhật danh mục</h1><br>
<form action="?url=update-category&id=<?= $category['id_danh_muc'] ?>" method="post">
    <div class="col-md-6 input-group mb-4">
        <div class="input-group-prepend">
            <label class="input-group-text">Tên danh mục</label>
        </div>
        <input type="text" name="ten_danh_muc" class="form-control" value="<?= $category['ten_danh_muc'] ?>" required placeholder="ví dụ: giường, tủ, bàn, ghế ...">
    </div>
    <div class="col-md-6 input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text">Show danh mục</label>
        </div>
        <select class="custom-select" name="show_danh_muc" id="inputGroupSelect01">
            <option value="1" <?php echo ($category['show_danh_muc'] == 1) ? "selected" : "" ?>>Hiện</option>
            <option value="0" <?php echo ($category['show_danh_muc'] == 0) ? "selected" : "" ?>>Ẩn</option>
        </select>
    </div>

    <input type="submit" name="editdm" class="btn btn-primary" value="Cập nhật">
</form>
<br>
<a href="index.php?url=list-category"><button>Hủy thay đổi</button></a>