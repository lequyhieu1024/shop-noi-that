<h1 class="bg-info">Danh mục sản phẩm</h1><br>
<a href="?url=form-add-category"><button class="btn btn-primary">Thêm danh mục</button></a>
<div class="container mt-4">
    <table class="table table-bordered table-sm text-center">
        <thead>
            <tr>
                <th scope="col">ID danh mục</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">Show</th>
                <th scope="col">Tùy chọn</th>
            </tr>
        </thead>
        <tbody>
            <!-- Duyệt dữ liệu bằng foreach -->
            <?php
            foreach ($categories as $rows) :
                extract($rows);
            ?>

                <tr>
                    <th scope="row"><?= $id_danh_muc ?></th>
                    <td><?= $ten_danh_muc ?></td>
                    <td><?= $show_danh_muc == 0 ? "Ẩn" : "Hiện" ?></td>
                    <td>
                        <a href="index.php?url=form-update-category&id=<?= $id_danh_muc ?>"><button class="btn btn-warning">Sửa</button></a>
                        <a href="index.php?url=delete-category&id=<?= $id_danh_muc ?>"><button class="btn btn-danger">Xóa</button></a>
                    </td>
                </tr>

                <!-- Đóng duyệt -->
            <?php
            endforeach
            ?>

        </tbody>
    </table>
</div>