<div class="container mt-4">
<h1>Danh sách biến thể</h1>
    <table class="table table-bordered table-sm text-center">
        <thead>
            <tr>
                <th scope="col">Màu sắc</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Giá tiền</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Tùy chọn</th>
            </tr>
        </thead>
        <tbody>
            <!-- Duyệt dữ liệu bằng foreach -->
            <?php
            foreach ($load_all_bien_the as $rows) :
                extract($rows);
            ?>

                <tr>
                    <td><?= $mau_sac_bien_the ?></td>
                    <td><img style="width: 180px;height:100px" class="img-fluid" src="../../../public/image/<?= $anh_bien_the ?>" alt=""></td>
                    <td><?= number_format($gia_tien_bien_the,0,",") ?><sup>vnđ</sup></td>
                    <td><?= number_format($so_luong_bien_the,0,".") ?></td>
                    <td>
                        <a href="index.php?act=editbt&id=<?=$id_bien_the?>"><button class="btn btn-warning"><i class="far fa-edit nav-icon"></i></button></a>
                        <a href="index.php?act=deletebt&id=<?=$id_bien_the?>&idsp=<?=$id_san_pham?>"><button class="btn btn-danger"><i class="fa fa-trash nav-icon"></i></button></a>
                    </td>
                </tr>

                <!-- Đóng duyệt -->
            <?php
            endforeach
            ?>

        </tbody>
    </table>
</div>