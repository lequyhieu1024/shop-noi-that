<h1 class="bg-info">Navbar website</h1><br>
<div class="container mt-4">
    <table class="table table-bordered table-sm text-center">
        <thead>
            <tr>
                <th scope="col">ID navbar</th>
                <th scope="col">Tên navbar</th>
                <th scope="col">Link navbar</th>
                <th scope="col">Tùy chọn</th>
            </tr>
        </thead>
        <tbody>
            <!-- Duyệt dữ liệu bằng foreach -->
            <?php
            foreach ($listnb as $rows) :
                extract($rows);
            ?>

                <tr>
                    <th scope="row"><?= $id_navbar ?></th>
                    <td><?= $ten_navbar ?></td>
                    <td><?= $link_navbar ?></td>
                    <td>
                        <a href="index.php?act=editnb&id=<?=$id_navbar?>"><button class="btn btn-warning">Sửa</button></a>
                    </td>
                </tr>

                <!-- Đóng duyệt -->
            <?php
            endforeach
            ?>

        </tbody>
    </table>
</div>