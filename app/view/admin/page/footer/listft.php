<h1 class="bg-info">Danh mục sản phẩm</h1><br>
<div class="container mt-4">
    <table class="table table-bordered table-sm text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tiêu đề footer</th>
                <th scope="col">Tùy chọn</th>
            </tr>
        </thead>
        <tbody>
            <!-- Duyệt dữ liệu bằng foreach -->
            <?php
            foreach ($listft as $rows) :
                extract($rows);
            ?>

                <tr>
                    <th scope="row"><?= $id_footer ?></th>
                    <td><?= $title_footer ?></td>
                    <td>
                        <a href="index.php?act=editft&id=<?=$id_footer?>"><button class="btn btn-warning">Sửa</button></a>
                    </td>
                </tr>

                <!-- Đóng duyệt -->
            <?php
            endforeach
            ?>

        </tbody>
    </table>
</div>