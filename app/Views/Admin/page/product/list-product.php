<h1 class="bg-info">Danh sách sản phẩm</h1><br>
<a href="?url=form-add-product"><button class="btn btn-primary">Thêm sản phẩm</button></a>
<div class="container mt-4">
    <table class="table table-bordered table-sm text-center">
        <thead>
            <tr>
                <th scope="col">ID sản phẩm</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Show</th>
                <th scope="col">Tùy chọn</th>
            </tr>
        </thead>
        <tbody>
            <!-- Duyệt dữ liệu bằng foreach -->
            <?php
            foreach ($product as $rows) :
                extract($rows);
            ?>

                <tr>
                    <th scope="row"><?= $id_san_pham ?></th>
                    <td><?= $ten_san_pham ?></td>
                    <td><img style="width: 180px;height:100px" class="img-fluid" src="../../../public/image/<?= $anh_san_pham ?>" alt=""></td>
                    <td><?= $show_san_pham == 0 ? "Ẩn" : "Hiện" ?></td>
                    <td>
                        <a href="index.php?url=detail-product&id=<?= $id_san_pham ?>"><button class="btn btn-success"><i class="fa fa-info nav-icon"></i></button></a>
                        <a href="index.php?url=form-update-product&id=<?= $id_san_pham ?>"><button class="btn btn-warning"><i class="far fa-edit nav-icon"></i></button></a>
                        <a href="index.php?url=delete-product&id=<?= $id_san_pham ?>"><button class="btn btn-danger"><i class="fa fa-trash nav-icon"></i></button></a>
                    </td>
                </tr>

                <!-- Đóng duyệt -->
            <?php
            endforeach
            ?>

        </tbody>
    </table>
</div>