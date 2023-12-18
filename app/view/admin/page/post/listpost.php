<h1 class="bg-info">Thuong hiệu sản phẩm</h1><br>
<div class="container mt-4">
    <table class="table table-bordered table-sm text-center">
        <thead>
            <tr>
                <th scope="col">ID bài viết</th>
                <th scope="col">Tiêu đề bài viết</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Viết về</th>
                <th scope="col">Show</th>
                <th scope="col">Tùy chọn</th>
            </tr>
        </thead>
        <tbody>
            <!-- Duyệt dữ liệu bằng foreach -->
            <?php
            foreach ($listpost as $rows) :
                extract($rows);
            ?>

                <tr>
                    <th scope="row"><?= $id_bai_viet ?></th>
                    <td><?= $title_bai_viet ?></td>
                    <td><img style="width: 200px;height:120px" class="img-fluid" src="../../../public/image/<?= $anh_bai_viet ?>" alt=""></td>
                    <td><?= $ten_danh_muc ?>,<?= $ten_san_pham ?>,<?= $ten_thuong_hieu ?></td>
                    <td><?= $show_bai_viet == 0 ? "Ẩn":"Hiện" ?></td>
                    <td>
                        <a href="index.php?act=editth&id=<?=$id_bai_viet?>"><button class="btn btn-warning">Sửa</button></a>
                        <a href="index.php?act=deleteth&id=<?=$id_bai_viet?>"><button class="btn btn-danger">Xóa</button></a>
                    </td>
                </tr>

                <!-- Đóng duyệt -->
            <?php
            endforeach
            ?>

        </tbody>
    </table>
</div>