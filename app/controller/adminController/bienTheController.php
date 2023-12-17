<?php 
    switch($act){
        case 'addbt':
            $mau_sac_bien_the = $_POST['mau_sac_bien_the'];
            if($_FILES['anh_bien_the']['name'] != ""){
                $target_dir = "../../../public/image/";
                $anh_bien_the = basename($_FILES["anh_bien_the"]["name"]);
                $target_file = $target_dir . $anh_bien_the;
                move_uploaded_file($_FILES["anh_bien_the"]["tmp_name"], $target_file);  
            }else{
                $anh_bien_the ="";
            }
            $gia_tien_bien_the = $_POST['gia_tien_bien_the'];
            $so_luong_bien_the = $_POST['so_luong_bien_the'];
            $id_san_pham = $_POST['id_san_pham'];
            addbt($mau_sac_bien_the,$anh_bien_the,$gia_tien_bien_the,$so_luong_bien_the,$id_san_pham);
            echo '<script>alert("Thêm thành công")</script>';
            echo '<script>window.location.href="index.php?act=chitietsp&id=' . $id_san_pham . '";</script>';
            break;

        case 'editbt':
            $id_bien_the = $_GET['id'];
            $load_one_bien_the = load_one_bien_the($id_bien_the);
            if(isset($_POST['editbt'])){
                $mau_sac_bien_the = $_POST['mau_sac_bien_the'];
                if($_FILES['anh_bien_the']['name'] != ""){
                    $target_dir = "../../../public/image/";
                    $anh_bien_the = basename($_FILES["anh_bien_the"]["name"]);
                    $target_file = $target_dir . $anh_bien_the;
                    move_uploaded_file($_FILES["anh_bien_the"]["tmp_name"], $target_file);  
                }else{
                    $anh_bien_the ="";
                }
                $gia_tien_bien_the = $_POST['gia_tien_bien_the'];
                $so_luong_bien_the = $_POST['so_luong_bien_the'];
                $id_san_pham = $_POST['id_san_pham'];
                editbt($id_bien_the,$mau_sac_bien_the,$anh_bien_the,$gia_tien_bien_the,$so_luong_bien_the);
                echo '<script>alert("Cập nhật thành công")</script>';
                echo '<script>window.location.href = "index.php?act=chitietsp&id='. $id_san_pham.'";</script>';
            }
            include "page/bienthe/editbt.php";
            break;

        case 'deletebt':
            $id_bien_the = $_GET['id'];
            $id_san_pham = $_GET['idsp'];
            deletebt($id_bien_the);
            echo '<script>window.location.href = "index.php?act=chitietsp&id='. $id_san_pham.'";</script>';
            break;
    }
?>