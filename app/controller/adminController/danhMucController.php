<?php 
    switch($act){
        case 'listdm':
            $listdm = listdm();
            include "page/danhmuc/listdm.php";
            break;

        case 'adddm':
            if(isset($_POST['adddm'])){
                $ten_danh_muc = $_POST['ten_danh_muc'];
                $show_danh_muc = $_POST['show_danh_muc'];
                adddm($ten_danh_muc,$show_danh_muc);
                $alert = "Thêm danh mục thành công !";
            }
            include "page/danhmuc/adddm.php";
            break;

        case 'editdm':
            $id_danh_muc = $_GET['id'];
            $listdm = load_one_dm($id_danh_muc);
            if(isset($_POST['editdm'])){
                $ten_danh_muc = $_POST['ten_danh_muc'];        
                $show_danh_muc = $_POST['show_danh_muc'];
                editdm($id_danh_muc,$ten_danh_muc,$show_danh_muc);
                echo '<script>alert("Cập nhật thành công")</script>';
                echo '<script>window.location.href = "index.php?act=listdm"</script>';
            }
            include "page/danhmuc/editdm.php";
            break;

        case 'deletedm':
            $id_danh_muc = $_GET['id'];
            deletedm($id_danh_muc);
            header("location: index.php?act=listdm");
            break;
    }
?>