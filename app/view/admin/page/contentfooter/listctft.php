<h1 class="bg-info">Danh sách content</h1><br>
<div class="container mt-4">
    <table class="table table-bordered table-sm text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Content</th>
                <th scope="col">Thuộc về</th>
                <th scope="col">Tùy chọn</th>
            </tr>
        </thead>
        <tbody>
            <!-- Duyệt dữ liệu bằng foreach -->
            <?php
            foreach ($listctft as $rows) :
                extract($rows);
            ?>

                <tr>
                    <th scope="row"><?= $id_content ?></th>
                    <td><?= $content ?></td>
                    <td><?=$title_footer?></td>
                    <td>
                        <a href="index.php?act=editctft&id=<?=$id_content?>&id_footer=<?=$id_footer?>"><button class="btn btn-warning">Sửa</button></a>
                        <a href="index.php?act=deletectft&id=<?=$id_content?>"><button class="btn btn-danger">Xóa</button></a>
                    </td>
                </tr>

                <!-- Đóng duyệt -->
            <?php
            endforeach
            ?>

        </tbody>
    </table>
</div>