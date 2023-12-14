<?php 
    switch($act){
        case 'listsr':
            $listsr = listsr();
            include "page/styleroom/listsr.php";
            break;

        case 'addsr':
            if(isset($_POST['addsr'])){
                $ten_style = $_POST['ten_style'];
                if($_FILES['hinh_anh']['name'] != ""){
                    $target_dir = "../../../public/image/";
                    $hinh_anh = basename($_FILES["hinh_anh"]["name"]);
                    $target_file = $target_dir . $hinh_anh;
                    move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file);  
                }else{
                    $hinh_anh ="";
                }
                $mo_ta = $_POST['mo_ta'];
                $show_style = $_POST['show_style'];
                addsr($ten_style,$hinh_anh,$mo_ta,$show_style);
                $alert = "Thêm style phòng thành công !";
            }
            include "page/styleroom/addsr.php";
            break;

        case 'editsr':
            $id_style = $_GET['id'];
            $listsr = load_one_sr($id_style);
            if(isset($_POST['editsr'])){
                $ten_style = $_POST['ten_style'];        
                if($_FILES['hinh_anh']['name'] != ""){
                    $hinh_anh = basename($_FILES["hinh_anh"]["name"]);
                    $target_dir = "../../../public/image/";
                    $target_file = $target_dir . $hinh_anh;
                    move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file);  
                }else{
                    $hinh_anh ="";
                }
                $mo_ta = $_POST['mo_ta'];
                $show_style = $_POST['show_style'];
                editsr($id_style, $ten_style, $hinh_anh, $mo_ta, $show_style);
                echo '<script>alert("Cập nhật thành công")</script>';
                echo '<script>window.location.href = "index.php?act=listsr"</script>';
            }
            include "page/styleroom/editsr.php";
            break;

        case 'deletesr':
            $id_style = $_GET['id'];
            deletesr($id_style);
            header("location: index.php?act=listsr");
            break;
    }
?>