<?php 
    switch($act){
        case 'listws':
            $listws = listws();
            include "page/website/listws.php";
            break;

        case 'editws':
            $listws = listws();
            if(isset($_POST['editws'])){
                $ten_website = $_POST['ten_website'];
                if($_FILES['logo_website']['name'] != ""){
                    $target_dir = "../../../public/image/";
                    $logo_website = basename($_FILES["logo_website"]["name"]);
                    $target_file = $target_dir . $logo_website;
                    move_uploaded_file($_FILES["logo_website"]["tmp_name"], $target_file);  
                }else{
                    $logo_website ="";
                }

                if($_FILES['banner_website']['name'] != ""){
                    $target_dir = "../../../public/image/";
                    $banner_website = basename($_FILES["banner_website"]["name"]);
                    $target_file = $target_dir . $banner_website;
                    move_uploaded_file($_FILES["banner_website"]["tmp_name"], $target_file);  
                }else{
                    $banner_website ="";
                }

                if($_FILES['favicon_website']['name'] != ""){
                    $target_dir = "../../../public/image/";
                    $favicon_website = basename($_FILES["favicon_website"]["name"]);
                    $target_file = $target_dir . $favicon_website;
                    move_uploaded_file($_FILES["favicon_website"]["tmp_name"], $target_file);  
                }else{
                    $favicon_website ="";
                }
                $title_website = $_POST['title_website'];
                $dia_chi_website = $_POST['dia_chi_website'];
                $phone_website = $_POST['phone_website'];
                $email_website = $_POST['email_website'];
                $rate = $_POST['rate'];
                
                editws($ten_website,$banner_website,$dia_chi_website,$email_website,$phone_website,$logo_website,$title_website,
                $favicon_website,$rate);
                
                echo '<script>alert("Cập nhật thành công")</script>';
                echo '<script>window.location.href = "index.php?act=listws"</script>';
            }
            include "page/website/editws.php";
            break;

    }
?>