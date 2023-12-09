<?php 
    switch($act){
        case 'listws':
            $listws = listws();
            include "page/website/listws.php";
            break;

        case 'editws':
            $listws = listws();
            if(isset($_POST['editws'])){
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
                
                editws($id_website, $ten_website,$banner_website,$dia_chi_website,$email_website,$phone_website,$logo_website,$title_website,
                $favicon_website,$rate);
                
                echo '<script>alert("Cập nhật thành công")</script>';
                echo '<script>window.location.href = "index.php?act=listws"</script>';
            }
            include "page/website/editws.php";
            break;

    }
?>