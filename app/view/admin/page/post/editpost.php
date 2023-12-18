<h1 class="bg-info">Tất cả bài viết</h1><br>
<div class="container-addsp">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Tiêu đề</label>
            <input type="text" class="form-control" required name="title_bai_viet" placeholder="Tiêu đề bài viết" aria-describedby="basic-addon1">
        </div>
        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Ảnh bài viết</label>
            <input type="file" class="form-control" required name="anh_bai_viet" aria-describedby="basic-addon1">
        </div>
        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend">Nội dùng bài viết</label>
            <textarea class="form-control" required name="noi_dung_bai_viet" placeholder="Nội dung bài viết" aria-label="With textarea"></textarea>
        </div>
        <div class="col-md-8 input-group mb-3">
            <!-- <label class="input-group-text input-group-prepend" id="basic-addon1">Giá bài viết</label> -->
            <input type="hidden" class="form-control" required name="ngay_dang_bai" value="<?= date("Y-m-d H-i-s"); ?>" aria-describedby="basic-addon1">
        </div>
        <div class="col-md-8 input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Viết về sản phẩm</label>
            </div>
            <select class="custom-select" name="id_san_pham" id="inputGroupSelect01">
                <option value="0">Không</option>
                <?php foreach ($listsp as $row) : ?>
                    <option value="<?= $row['id_san_pham'] ?>"><?= $row['ten_san_pham'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="col-md-8 input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Viết về danh mục</label>
            </div>
            <select class="custom-select" name="id_danh_muc" id="inputGroupSelect01">
                <option value="0">Không</option>
                <?php foreach ($listdm as $row) : ?>
                    <option value="<?= $row['id_danh_muc'] ?>"><?= $row['ten_danh_muc'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="col-md-8 input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Viết về thương hiệu</label>
            </div>
            <select class="custom-select" name="id_thuong_hieu" id="inputGroupSelect01">
                <option value="0">Không</option>
                <?php foreach ($listth as $rows) : ?>
                    <option value="<?= $rows['id_thuong_hieu'] ?>"><?= $rows['ten_thuong_hieu'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="col-md-8 input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Show bài viết</label>
            </div>
            <select class="custom-select" required name="show_bai_viet" id="inputGroupSelect01">
                <option value="1">Hiện</option>
                <option value="0">Ẩn</option>
            </select>
        </div>
        <input type="submit" required name="addpost" class="btn btn-primary" value="Thêm bài viết">
    </form>
    <h2 class="text-danger"><?= $alert ?></h2>
    <a href="index.php?act=listpost"><button>Xem danh sách bài viết</button></a>
</div>