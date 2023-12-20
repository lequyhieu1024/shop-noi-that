<?php 
switch($act){
    case 'addpost':
        $listsp = listsp();
        $listdm = listdm();
        $listth = listth();
        if(isset($_POST['addpost'])){
            $title_bai_viet = $_POST['title_bai_viet'];
            if($_FILES['anh_bai_viet']['name'] != ""){
                $target_dir = "../../../public/image/";
                $anh_bai_viet = basename($_FILES["anh_bai_viet"]["name"]);
                $target_file = $target_dir . $anh_bai_viet;
                move_uploaded_file($_FILES["anh_bai_viet"]["tmp_name"], $target_file);  
            }else{
                $anh_bai_viet ="";
            }
            $noi_dung_bai_viet = $_POST['noi_dung_bai_viet'];
            $ngay_dang_bai = $_POST['ngay_dang_bai'];
            $id_thuong_hieu = $_POST['id_thuong_hieu'];
            $id_danh_muc = $_POST['id_danh_muc'];
            $id_san_pham = $_POST['id_san_pham'];
            $show_bai_viet = $_POST['show_bai_viet'];
            addpost($title_bai_viet,$anh_bai_viet,$noi_dung_bai_viet,$ngay_dang_bai,$id_san_pham,$id_danh_muc,$id_thuong_hieu,$show_bai_viet);
            $alert = "Thêm thành công ! ";
        }
        include "page/post/addpost.php";
        break;
    case 'listpost':
        $listpost = listpost();
        include "page/post/listpost.php";
        break;
    case 'editpost':
        $listsp = listsp();
        $listdm = listdm();
        $listth = listth();
        $id_bai_viet = $_GET['id'];
        $post_detail = load_one_post($id_bai_viet);
        if(isset($_POST['editpost'])){
            $title_bai_viet = $_POST['title_bai_viet'];
            if($_FILES['anh_bai_viet']['name'] != ""){
                $target_dir = "../../../public/image/";
                $anh_bai_viet = basename($_FILES["anh_bai_viet"]["name"]);
                $target_file = $target_dir . $anh_bai_viet;
                move_uploaded_file($_FILES["anh_bai_viet"]["tmp_name"], $target_file);  
            }else{
                $anh_bai_viet ="";
            }
            $noi_dung_bai_viet = $_POST['noi_dung_bai_viet'];
            $id_danh_muc = $_POST['id_danh_muc'];
            $id_thuong_hieu = $_POST['id_thuong_hieu'];
            $id_san_pham = $_POST['id_san_pham'];
            $show_bai_viet = $_POST['show_bai_viet'];
            editpost($id_bai_viet,$title_bai_viet,$anh_bai_viet,$noi_dung_bai_viet,$id_thuong_hieu,$id_danh_muc,$id_san_pham,$show_bai_viet);
            echo '<script>alert("Cập nhật thành công")</script>';
            echo '<script>window.location.href = "index.php?act=listpost"</script>';
        }
        include "page/post/editpost.php";
        break;
    case 'deletepost':
        $listpost = listpost();
        include "page/post/listpost.php";
        break;
}