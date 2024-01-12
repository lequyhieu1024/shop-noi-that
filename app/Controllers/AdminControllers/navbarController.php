<?php 
switch($act){
    case 'listnb':
        $listnb = listnb();
        include "page/navbar/listnb.php";
        break;
    case 'editnb':
        $id_navbar = $_GET['id'];
        $listnb = load_one_nb($id_navbar);
        if(isset($_POST['editnb'])){
            $ten_navbar = $_POST['ten_navbar'];
            $link_navbar = $_POST['link_navbar'];
            editnb($id_navbar,$ten_navbar,$link_navbar);
            echo '<script>alert("Cập nhật thành công")</script>';
            echo '<script>window.location.href = "index.php?act=listnb"</script>';
        }
        include "page/navbar/editnb.php";
        break;
}