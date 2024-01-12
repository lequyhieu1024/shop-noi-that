<?php 
    switch($act){
        case 'listctft':
            $listctft = listctft();
            include "page/contentfooter/listctft.php";
            break;

        case 'addctft':
            $listft = listft();
            if(isset($_POST['addctft'])){
                $content = $_POST['content'];
                $id_footer = $_POST['id_footer'];
                addctft($content,$id_footer);
                $alert = "Thêm thành công !";
            }
            include "page/contentfooter/addctft.php";
            break;

        case 'editctft':
            $id_content = $_GET['id'];
            $listft = listft();
            $id_footer = $_GET['id_footer'];
            $listctft = load_one_ctft($id_content);
            if(isset($_POST['editctft'])){
                $content = $_POST['content'];        
                $id_footer = $_POST['id_footer'];
                editctft($id_content,$content,$id_footer);
                echo '<script>alert("Cập nhật thành công")</script>';
                echo '<script>window.location.href = "index.php?act=listctft"</script>';
            }
            include "page/contentfooter/editctft.php";
            break;

        case 'deletectft':
            $id_content = $_GET['id'];
            deletectft($id_content);
            header("location: index.php?act=listctft");
            break;
    }
?>