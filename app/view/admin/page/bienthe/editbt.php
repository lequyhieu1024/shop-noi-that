<?php foreach($load_one_bien_the as $rows):?>
<h1 class="bg-info">
<a href="index.php?act=chitietsp&id=<?=$rows['id_san_pham']?>"><button class="btn btn-warning mb-2 ml-2"><i class="fa fa-backward"></i> Trở về</button></a>
Chi tiết sản phẩm 
</h1>
<form class="form-group" method="post" enctype="multipart/form-data">
    <div class="form-mini-bt" style="padding:20px;">
        <div class="input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Màu sắc</label>
            <input type="text" class="form-control" required value="<?=$rows['mau_sac_bien_the']?>" name="mau_sac_bien_the" placeholder="Màu sắc" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Ảnh biến thể</label>
            <input type="file" class="form-control" name="anh_bien_the" aria-describedby="basic-addon1">
        </div>
        ảnh hiện tại <img style="width: 200px;height:100px" class="img-fluid mb-3" src="../../../public/image/<?=$rows['anh_bien_the']?>" alt="">
        <div class="input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Giá biến thể</label>
            <input type="number" class="form-control" required value="<?=$rows['gia_tien_bien_the']?>" name="gia_tien_bien_the" placeholder="Giá biến thể" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Kích thước</label>
            <input type="text" class="form-control" required value="<?=$rows['kich_thuoc_bien_the']?>" name="kich_thuoc_bien_the" placeholder="Kích thước đang có" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text input-group-prepend" id="basic-addon1">Số lượng</label>
            <input type="number" class="form-control" required value="<?=$rows['so_luong_bien_the']?>" name="so_luong_bien_the" placeholder="Số lượng đang có" aria-describedby="basic-addon1">
        </div>
        <input type="hidden" value="<?=$rows['id_san_pham']?>" name="id_san_pham">
        <input type="hidden" name="id_san_pham" value="<?= $rows['id_san_pham'] ?>">
        <input type="submit" name="editbt" class="btn btn-primary" value="Cập nhật">
    </div>
</form>
<?php endforeach ?>