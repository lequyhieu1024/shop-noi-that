<h1 class="bg-info">Chỉnh sửa bài viết</h1><br>
<?php
foreach ($post_detail as $rows) : ?>
    <div class="container-addsp">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="col-md-8 input-group mb-3">
                <label class="input-group-text input-group-prepend" id="basic-addon1">Tiêu đề</label>
                <input type="text" class="form-control" required value="<?=$rows['title_bai_viet']?>" name="title_bai_viet" placeholder="Tiêu đề bài viết" aria-describedby="basic-addon1">
            </div>
            <div class="col-md-8 input-group mb-3">
                <label class="input-group-text input-group-prepend" id="basic-addon1">Ảnh bài viết</label>
                <input type="file" class="form-control" name="anh_bai_viet" aria-describedby="basic-addon1">
            </div>
            Ảnh hiện tại : <img style="margin-bottom:10px;width: 200px;height:120px" class="img-fluid" src="../../../public/image/<?= $rows['anh_bai_viet'] ?>" alt="">
            <div class="col-md-8 input-group mb-3">
                <label class="input-group-text input-group-prepend">Nội dùng bài viết</label>
                <textarea class="form-control" required name="noi_dung_bai_viet" placeholder="Nội dung bài viết" aria-label="With textarea"><?=$rows['noi_dung_bai_viet']?></textarea>
            </div>
            <div class="col-md-8 input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text">Viết về sản phẩm</label>
                </div>
                <select class="custom-select" name="id_san_pham" id="inputGroupSelect01">
                    <option value="0">Không</option>
                    <?php foreach ($listsp as $row) : ?>
                        <option value="<?= $row['id_san_pham'] ?>" <?= ($rows['id_san_pham'] == $row['id_san_pham']) ? "selected":"" ?>><?= $row['ten_san_pham'] ?></option>
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
                        <option value="<?= $row['id_danh_muc'] ?>"<?= ($rows['id_danh_muc'] == $row['id_danh_muc']) ? "selected":"" ?>><?= $row['ten_danh_muc'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="col-md-8 input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text">Viết về thương hiệu</label>
                </div>
                <select class="custom-select" name="id_thuong_hieu" id="inputGroupSelect01">
                    <option value="0">Không</option>
                    <?php foreach ($listth as $row) : ?>
                        <option value="<?= $row['id_thuong_hieu'] ?>" <?= ($rows['id_thuong_hieu'] == $row['id_thuong_hieu']) ? "selected":"" ?>><?= $row['ten_thuong_hieu'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="col-md-8 input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text">Show bài viết</label>
                </div>
                <select class="custom-select" name="show_bai_viet" id="inputGroupSelect01">
                    <option value="1" <?= $rows['show_bai_viet'] == 1 ? "selected" : "" ?>>Hiện</option>
                    <option value="0" <?= $rows['show_bai_viet'] == 0 ? "selected" : "" ?>>Ẩn</option>
                </select>
            </div>
            <input type="submit" name="editpost" class="btn btn-primary" value="Sửa bài viết">
        </form>
        <h2 class="text-danger"><?= $alert ?></h2>
        <a href="index.php?act=listpost"><button>Xem danh sách bài viết</button></a>
    </div>
<?php endforeach ?>