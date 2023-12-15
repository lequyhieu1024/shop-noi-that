<div class="container">

    <div class="button-show-form d-flex">
        <button id="showFormBtn" class="btn btn-success ml-20">Thêm biến thể</button>
        <button id="hideFormBtn" class="btn btn-danger ml-3" style="display: none;">Ẩn biểu mẫu</button>
    </div>

    <!-- FORM BIẾN THỂ -->

    <div id="formContainer">
        <form class="form-group" action="index.php?act=addbt" method="post" enctype="multipart/form-data" style="display: none;margin-top:20px;">
            <div class="form-mini-bt" style="padding:20px;">
                <div class="input-group mb-3">
                    <label class="input-group-text input-group-prepend" id="basic-addon1">Màu sắc</label>
                    <input type="text" class="form-control" required name="mau_sac_bien_the" placeholder="Màu sắc" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text input-group-prepend" id="basic-addon1">Ảnh biến thể</label>
                    <input type="file" class="form-control" name="anh_bien_the" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text input-group-prepend" id="basic-addon1">Giá biến thể</label>
                    <input type="number" class="form-control" required name="gia_tien_bien_the" placeholder="Giá biến thể" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text input-group-prepend" id="basic-addon1">Kích thước</label>
                    <input type="text" class="form-control" required name="kich_thuoc_bien_the" placeholder="Dài x Rộng x Cao (đơn vị Cen-ti-met). VD: 20x30x50 cm" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text input-group-prepend" id="basic-addon1">Số lượng</label>
                    <input type="number" class="form-control" required name="so_luong_bien_the" placeholder="Số lượng đang có" aria-describedby="basic-addon1">
                </div>
                <input type="hidden" name="id_san_pham" value="<?= $id_san_pham ?>">
                <input type="submit" name="addbt" class="btn btn-primary add-sp-btn" value="Thêm biến thể">
            </div>
        </form>
    </div>

</div>