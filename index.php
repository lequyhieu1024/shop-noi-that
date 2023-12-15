<?php 
    session_start();
    include "config.php";
    include "app/model/clientModel/taiKhoanModel.php";
    include "app/model/clientModel/danhMucModel.php";
    include "app/model/clientModel/websiteModel.php";
    include "app/model/clientModel/thuongHieuModel.php";
    include "app/model/clientModel/styleRoomModel.php";
    include "app/model/clientModel/footerModel.php";
    include "app/model/clientModel/navbarModel.php";



    include "app/view/client/layout/header.php";
    if(isset($_GET['redirect'])){
        $redirect = $_GET['redirect'];
        include "app/controller/clientController/taiKhoanController.php";
        include "app/controller/clientController/sanPhamController.php";
    }else{
        include "app/view/client/layout/home.php";
    }
    include "app/view/client/layout/footer.php";
?>