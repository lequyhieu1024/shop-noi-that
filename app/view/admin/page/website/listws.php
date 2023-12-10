<h1 class="bg-info">Thông tin website</h1><br>

<?php foreach($listws as $rows):
    extract($rows);?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Tên Website</th>
      <th scope="col"><?=$ten_website?></th>
      <th><a href="index.php?act=editws"><button class="btn btn-warning">Cập nhật thông tin website</button></a></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Banner Website</th>
      <td><img style="width: 400px;height:200px" src="../../../public/image/<?=$banner_website?>" alt=""></td>
    </tr>
    <tr>
      <th scope="row">Email website</th>
      <td><?=$email_website?></td>
    </tr>
    <tr>
      <th scope="row">Phone Website</th>
      <td><?=$phone_website?></td>
    </tr>
    <tr>
      <th scope="row">Địa chỉ</th>
      <td><?=$dia_chi_website?></td>
    </tr>
    <tr>
      <th scope="row">Logo Website</th>
      <td><img style="width: 400px;height:200px" src="../../../public/image/<?=$logo_website?>" alt=""></td>
    </tr>
    <tr>
      <th scope="row">Title Website</th>
      <td><?=$title_website?></td>
    </tr>
    <tr>
      <th scope="row">Favico Website</th>
      <td><img style="width: 400px;height:200px" src="../../../public/image/<?=$favicon_website?>" alt=""></td>
    </tr>
    <tr>
      <th scope="row">Rate Website</th>
      <td><?=$rate?></td>
    </tr>
  </tbody>
</table>
<?php endforeach ?>