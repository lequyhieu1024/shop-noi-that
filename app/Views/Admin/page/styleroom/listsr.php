<h1 class="bg-info">Danh sách style Phòng</h1><br>
<div class="container mt-4">
    <table class="table table-bordered table-sm text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Kiểu phòng</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Đánh giá</th>
                <th scope="col">Show</th>
                <th scope="col">Tùy chọn</th>
            </tr>
        </thead>
        <tbody>
            <!-- Duyệt dữ liệu bằng foreach -->
            <?php
            foreach ($listsr as $rows) :
                extract($rows);
            ?>

                <tr>
                    <th scope="row"><?= $id_style ?></th>
                    <td><?= $ten_style ?></td>
                    <td><img style="width: 200px;height:120px" src="../../../public/image/<?= $hinh_anh ?>" alt=""></td>
                    <td><?= $mo_ta ?></td>
                    <td><?= $danh_gia?></td>
                    <td><?= $show_style == 0 ? "Ẩn":"Hiện" ?></td>
                    <td>
                        <a href="index.php?act=editsr&id=<?=$id_style?>"><button class="btn btn-warning">Sửa</button></a>
                        <a href="index.php?act=deletesr&id=<?=$id_style?>"><button class="btn btn-danger">Xóa</button></a>
                    </td>
                </tr>

                <!-- Đóng duyệt -->
            <?php
            endforeach
            ?>

        </tbody>
    </table>
</div>