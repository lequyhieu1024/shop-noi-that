<h1 class="bg-info">Cập nhật thông tin website</h1><br>

<?php foreach($listws as $rows):
    extract($rows);?>
<form action="" method="post" enctype="multipart/form-data">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Tên Website</th>
      <th scope="col"><input type="text" name="ten_website" value="<?=$ten_website?>" id=""></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Banner Website</th>
      <td><input type="file" name="banner_website" id="">
      <img style="width: 100px;height:50px" src="../../../public/image/<?=$banner_website?>" alt=""></td>
      
    </tr>
    <tr>
      <th scope="row">Email website</th>
      <td><input type="email" name="email_website" value="<?=$email_website?>" id=""></td>
    </tr>
    <tr>
      <th scope="row">Phone Website</th>
      <td><input type="number" value="<?=$phone_website?>" name="phone_website"></td>
    </tr>
    <tr>
      <th scope="row">Địa chỉ Website</th>
      <td><input type="text" value="<?=$dia_chi_website?>" name="dia_chi_website"></td>
    </tr>
    <tr>
      <th scope="row">Logo Website</th>
      <td><input type="file" name="logo_website" id="">
      <img style="width: 100px;height:50px" src="../../../public/image/<?=$logo_website?>" alt=""></td>
      
    </tr>
    <tr>
      <th scope="row">Title Website</th>
      <td><input type="text" name="title_website" value="<?=$title_website?>" id=""></td>
    </tr>
    <tr>
      <th scope="row">Favico Website</th>
      <td><input type="file" name="favicon_website">
      <img style="width: 100px;height:50px" src="../../../public/image/<?=$favicon_website?>" alt=""></td>
      
    </tr>
      <th scope="row">Rate Website</th>
      <td><input type="number" name="rate" value="<?=$rate?>"></td>
    </tr>
  </tbody>
</table>
<input class="btn btn-success" type="submit" value="Cập nhật" name="editws">
</form>

<?php endforeach ?>