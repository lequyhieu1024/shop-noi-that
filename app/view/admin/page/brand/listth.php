<h1 class="bg-info">Thuong hiệu sản phẩm</h1><br>
<div class="container mt-4">
    <table class="table table-bordered table-sm text-center">
        <thead>
            <tr>
                <th scope="col">ID Thương hiệu</th>
                <th scope="col">Tên Thương hiệu</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Show</th>
                <th scope="col">Tùy chọn</th>
            </tr>
        </thead>
        <tbody>
            <!-- Duyệt dữ liệu bằng foreach -->
            <?php
            foreach ($listth as $rows) :
                extract($rows);
            ?>

                <tr>
                    <th scope="row"><?= $id_thuong_hieu ?></th>
                    <td><?= $ten_thuong_hieu ?></td>
                    <td><img style="width: 200px;height:120px" class="img-fluid" src="../../../public/image/<?= $anh_thuong_hieu ?>" alt=""></td>
                    <td><?= $show_thuong_hieu == 0 ? "Ẩn":"Hiện" ?></td>
                    <td>
                        <a href="index.php?act=editth&id=<?=$id_thuong_hieu?>"><button class="btn btn-warning">Sửa</button></a>
                        <a href="index.php?act=deleteth&id=<?=$id_thuong_hieu?>"><button class="btn btn-danger">Xóa</button></a>
                    </td>
                </tr>

                <!-- Đóng duyệt -->
            <?php
            endforeach
            ?>

        </tbody>
    </table>
</div>