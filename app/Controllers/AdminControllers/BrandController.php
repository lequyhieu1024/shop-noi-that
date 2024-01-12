<?php

namespace app\Controllers\AdminControllers;

use app\Models\Admin\Brand;

class BrandController
{
    function listBrand()
    {
        $BrandModel = new Brand();
        $brand = $BrandModel->getAllBrands();
        require_once "layout/header.php";
        require_once "page/brand/list-brand.php";
        require_once "layout/footer.php";
    }
    function showFormAdd()
    {
        $alert = isset($_GET['alert']) ? urldecode($_GET['alert']) : "";
        require_once "layout/header.php";
        require_once "page/brand/form-add-brand.php";
        require_once "layout/footer.php";
    }
    function addBrand()
    {
        if (isset($_POST['addth'])) {
            $ten_thuong_hieu = $_POST['ten_thuong_hieu'];
            if ($_FILES['anh_thuong_hieu']['name'] != "") {
                $target_dir = "../../../public/image/";
                $anh_thuong_hieu = basename($_FILES["anh_thuong_hieu"]["name"]);
                $target_file = $target_dir . $anh_thuong_hieu;
                move_uploaded_file($_FILES["anh_thuong_hieu"]["tmp_name"], $target_file);
            } else {
                $anh_thuong_hieu = "";
            }
            $show_thuong_hieu = $_POST['show_thuong_hieu'];
            $BrandModel = new Brand();
            $BrandModel->addBrand($ten_thuong_hieu, $anh_thuong_hieu, $show_thuong_hieu);
            $alert = "Thêm thương hiệu thành công !";
            echo '<script>window.location.href="?url=form-add-brand&alert=' . urlencode($alert) . '"</script>';
        }
    }
    function showFormUpdate()
    {
        $id_thuong_hieu = $_GET['id'];
        $BrandModel = new Brand();
        $brand = $BrandModel->getOneBrand($id_thuong_hieu);
        require_once "layout/header.php";
        require_once "page/brand/form-update-brand.php";
        require_once "layout/footer.php";
    }
    function updateBrand()
    {
        if (isset($_POST['editth'])) {
            $id_thuong_hieu = $_GET['id'];
            $ten_thuong_hieu = $_POST['ten_thuong_hieu'];
            if ($_FILES['anh_thuong_hieu']['name'] != "") {
                $anh_thuong_hieu = basename($_FILES["anh_thuong_hieu"]["name"]);
                $target_dir = "../../../public/image/";
                $target_file = $target_dir . $anh_thuong_hieu;
                move_uploaded_file($_FILES["anh_thuong_hieu"]["tmp_name"], $target_file);
            } else {
                $anh_thuong_hieu = "";
            }
            $show_thuong_hieu = $_POST['show_thuong_hieu'];

            $BrandModel = new Brand();
            $BrandModel->editBrand($id_thuong_hieu, $ten_thuong_hieu, $anh_thuong_hieu, $show_thuong_hieu);
            echo '<script>alert("Cập nhật thành công")</script>';
            echo '<script>window.location.href = "index.php?url=list-brand"</script>';
        }
    }
    function deleteBrand()
    {
        $id_thuong_hieu = $_GET['id'];
        $BrandModel = new Brand();
        $BrandModel->deleteBrand($id_thuong_hieu);
        header("location: index.php?url=list-brand");
    }
}
