<?php 
    switch($act){
        case 'listth':
            $listth = listth();
            include "page/thuonghieu/listth.php";
            break;

        case 'addth':
            if(isset($_POST['addth'])){
                $ten_thuong_hieu = $_POST['ten_thuong_hieu'];
                if($_FILES['anh_thuong_hieu']['name'] != ""){
                    $target_dir = "../../../public/image/";
                    $anh_thuong_hieu = basename($_FILES["anh_thuong_hieu"]["name"]);
                    $target_file = $target_dir . $anh_thuong_hieu;
                    move_uploaded_file($_FILES["anh_thuong_hieu"]["tmp_name"], $target_file);  
                }else{
                    $anh_thuong_hieu ="";
                }
                $show_thuong_hieu = $_POST['show_thuong_hieu'];
                addth($ten_thuong_hieu,$anh_thuong_hieu,$show_thuong_hieu);
                $alert = "Thêm thương hiệu thành công !";
            }
            include "page/thuonghieu/addth.php";
            break;

        case 'editth':
            $id_thuong_hieu = $_GET['id'];
            $listth = load_one_th($id_thuong_hieu);
            if(isset($_POST['editth'])){
                $ten_thuong_hieu = $_POST['ten_thuong_hieu'];        
                if($_FILES['anh_thuong_hieu']['name'] != ""){
                    $anh_thuong_hieu = basename($_FILES["anh_thuong_hieu"]["name"]);
                    $target_dir = "../../../public/image/";
                    $target_file = $target_dir . $anh_thuong_hieu;
                    move_uploaded_file($_FILES["anh_thuong_hieu"]["tmp_name"], $target_file);  
                }else{
                    $anh_thuong_hieu ="";
                }
                $show_thuong_hieu = $_POST['show_thuong_hieu'];
                editth($id_thuong_hieu, $ten_thuong_hieu, $anh_thuong_hieu,$show_thuong_hieu);
                echo '<script>alert("Cập nhật thành công")</script>';
                echo '<script>window.location.href = "index.php?act=listth"</script>';
            }
            include "page/thuonghieu/editth.php";
            break;

        case 'deleteth':
            $id_thuong_hieu = $_GET['id'];
            deleteth($id_thuong_hieu);
            header("location: index.php?act=listth");
            break;
    }
?>