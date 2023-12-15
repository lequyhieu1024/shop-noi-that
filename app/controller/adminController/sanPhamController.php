<?php 
    switch($act){
        case 'listsp':
            $listsp = listsp();
            include "page/sanpham/listsp.php";
            break;
            
        case 'chitietsp':
            $id_san_pham = $_GET['id'];
            $listsp = listsp();
            $listdm = listdm();
            $listth = listth();
            $load_one_sp = load_one_sp($id_san_pham);
            $load_all_bien_the = load_all_bien_the($id_san_pham);
            include "page/sanpham/chitietsp.php";
            break;

        case 'addsp':
            $listdm = listdm();
            $listth = listth();
            if(isset($_POST['addsp'])){
                $ten_san_pham = $_POST['ten_san_pham'];
                if($_FILES['anh_san_pham']['name'] != ""){
                    $target_dir = "../../../public/image/";
                    $anh_san_pham = basename($_FILES["anh_san_pham"]["name"]);
                    $target_file = $target_dir . $anh_san_pham;
                    move_uploaded_file($_FILES["anh_san_pham"]["tmp_name"], $target_file);  
                }else{
                    $anh_san_pham ="";
                }
                $mo_ta = $_POST['mo_ta'];
                $gia_tien = $_POST['gia_tien'];
                $so_luong = $_POST['so_luong'];
                $id_danh_muc = $_POST['id_danh_muc'];
                $id_thuong_hieu = $_POST['id_thuong_hieu'];
                $show_san_pham = $_POST['show_san_pham'];
                
                addsp($ten_san_pham,$anh_san_pham,$mo_ta,
                $gia_tien,$so_luong,$id_danh_muc,$id_thuong_hieu,$show_san_pham);
                $alert = "Thêm sản phẩm thành công";
            }
            include "page/sanpham/addsp.php";
            break;

        case 'editsp':
            $id_san_pham = $_GET['id'];
            $listdm = listdm();
            $listth = listth();
            $load_one_sp = load_one_sp($id_san_pham);
            if(isset($_POST['editsp'])){
                $ten_san_pham = $_POST['ten_san_pham'];
                if($_FILES['anh_san_pham']['name'] != ""){
                    $target_dir = "../../../public/image/";
                    $anh_san_pham = basename($_FILES["anh_san_pham"]["name"]);
                    $target_file = $target_dir . $anh_san_pham;
                    move_uploaded_file($_FILES["anh_san_pham"]["tmp_name"], $target_file);  
                }else{
                    $anh_san_pham ="";
                }
                $mo_ta = $_POST['mo_ta'];
                $gia_tien = $_POST['gia_tien'];
                $so_luong = $_POST['so_luong'];
                $id_danh_muc = $_POST['id_danh_muc'];
                $id_thuong_hieu = $_POST['id_thuong_hieu'];
                $show_san_pham = $_POST['show_san_pham'];
                
                editsp($id_san_pham,$ten_san_pham,$anh_san_pham,$mo_ta,$gia_tien,$so_luong,$so_luot_thich,
                $so_luot_xem,$id_danh_muc,$id_thuong_hieu,$show_san_pham);
                
                echo '<script>alert("Cập nhật thành công")</script>';
                echo '<script>window.location.href = "index.php?act=listsp"</script>';
            }
            include "page/sanpham/editsp.php";
            break;

        case 'xoasp':
            echo '<script>alert("xóa sản phẩm")</script>';
            break;
    }
?>