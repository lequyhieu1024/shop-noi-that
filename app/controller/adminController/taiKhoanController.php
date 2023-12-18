<?php 
    switch($act){
        case 'taikhoanqtv':
            echo '<script>alert("Tài khoản quản trị viên")</script>';
            include "page/account/taikhoanqtv.php";
            break;
        case 'taikhoankh':
            echo '<script>alert("Tài khoản khách hàng")</script>';
            include "page/account/taikhoankh.php";
            break;
    }
?>