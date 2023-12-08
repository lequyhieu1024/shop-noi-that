<h1 class="bg-info">Thêm sản phẩm</h1><br>
<div class="container-addsp">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Tên sản phẩm</label>
            <input type="text" class="form-control" required name="ten_san_pham" placeholder="tên sản phẩm" aria-describedby="basic-addon1">
        </div>
        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Ảnh sản phẩm</label>
            <input type="file" class="form-control" required name="anh_san_pham" aria-describedby="basic-addon1">
        </div>
        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend">Mô tả</label>
            <textarea class="form-control" required name="mo_ta" placeholder="Mô tả sản phẩm" aria-label="With textarea"></textarea>
        </div>
        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Giá sản phẩm</label>
            <input type="number" class="form-control" required name="gia_tien" placeholder="Giá sản phẩm" aria-describedby="basic-addon1">
        </div>
        <div class="col-md-8 input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Tổng số lượng</label>
            <input type="number" class="form-control" required name="so_luong" placeholder="Tổng số lượng đang có" aria-describedby="basic-addon1">
        </div>
        <div class="col-md-8 input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Thuộc về danh mục</label>
            </div>
            <select class="custom-select" required name="id_danh_muc" id="inputGroupSelect01">
                <?php foreach($listdm as $row):?>
                <option value="<?= $row['id_danh_muc']?>"><?= $row['ten_danh_muc'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="col-md-8 input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Thuộc về thương hiệu</label>
            </div>
            <select class="custom-select" required name="id_thuong_hieu" id="inputGroupSelect01">
                <?php foreach($listth as $rows): ?>
                <option value="<?= $rows['id_thuong_hieu'] ?>"><?= $rows['ten_thuong_hieu'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="col-md-8 input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Show sản phẩm</label>
            </div>
            <select class="custom-select" required name="show_san_pham" id="inputGroupSelect01">
                <option value="1">Hiện</option>
                <option value="0">Ẩn</option>
            </select>
        </div>
        <input type="submit" required name="addsp" class="btn btn-primary" value="Thêm sản phẩm">
    </form>
    <h2 class="text-danger"><?= $alert ?></h2>
    <a href="index.php?act=listdm"><button>Xem danh sách sản phẩm</button></a>
</div>