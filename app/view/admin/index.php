<?php 
session_start();
// if(isset($_SESSION['id_role'])){
//     if($_SESSION['id_role']==3){
        include("../../../config.php");
        // include("../../models/AdminModel/binhluan.php");
        include("../../model/AdminModel/danhmucmodel.php");
        include("../../model/AdminModel/sanphammodel.php");
        include("../../model/AdminModel/thuonghieumodel.php");
        include("../../model/AdminModel/websitemodel.php");
        // include("../../models/AdminModel/quyen.php");
        // include("../../models/AdminModel/taikhoan.php");
        // include("../../models/AdminModel/khuyenmai.php");
        // include("../../models/AdminModel/trangthai.php");
        // include("../../models/AdminModel/lotrinhhoc.php");
        // include("../../models/AdminModel/lotrinhkhoahoc.php");
        
        include("layout/header.php");
                if(isset($_GET['act'])){
                        $act= $_GET['act'];
                        include "../../controller/adminController/taiKhoanController.php";
                        include "../../controller/adminController/sanPhamController.php";
                        include "../../controller/adminController/danhMucController.php";
                        include "../../controller/adminController/bienTheController.php";
                        include "../../controller/adminController/thuongHieuController.php";
                        include "../../controller/adminController/websiteController.php";
                }else{
                        // include "../../view/admin/layout/home.php";
                }
        include("layout/footer.php");
//     }else{
//     echo '<img style="width:100%;height:100%" src="../../../public/images/404.png" alt="">';
//     }
// }else{
//     echo '<img style="width:100%;height:100%" src="../../../public/images/404.png" alt="">';
// }
?>