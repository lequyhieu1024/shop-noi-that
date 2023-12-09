<?php foreach($listws as $rows):
    extract($rows);?>

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
      <td><img style="width: 400px;height:200px" src="../../../public/image/<?=$banner_website?>" alt=""></td>
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