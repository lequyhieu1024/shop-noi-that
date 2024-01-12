<?php 
    switch($act){
        case 'listft':
            $listft = listft();
            include "page/footer/listft.php";
            break;
        case 'editft':
            $id_footer = $_GET['id'];
            $listft = load_one_ft($id_footer);
            if(isset($_POST['editft'])){
                $ten_danh_muc = $_POST['ten_danh_muc'];        
                $title_footer = $_POST['title_footer'];
                editft($id_footer,$title_footer);
                echo '<script>alert("Cập nhật thành công")</script>';
                echo '<script>window.location.href = "index.php?act=listft"</script>';
            }
            include "page/footer/editft.php";
            break;
    }
?>