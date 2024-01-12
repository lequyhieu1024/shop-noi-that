<?php

namespace app\Controllers\AdminControllers;

use app\Models\Admin\Brand;
use app\Models\Admin\Category;
use app\Models\Admin\Product;

class ProductController
{
    function listProduct()
    {
        $productModel = new Product();
        $product = $productModel->getAllProduct();
        require_once 'layout/header.php';
        require_once "page/product/list-product.php";
        require_once 'layout/footer.php';
    }

    function detailProduct()
    {
        $id_san_pham = $_GET['id'];
        $productModel = new Product();
        $detailProduct = $productModel->getOneProduct($id_san_pham);
        require_once 'layout/header.php';
        require_once "page/product/detail-product.php";
        require_once 'layout/footer.php';
    }
    function showFormAdd()
    {
        $alert = isset($_GET['alert']) ? urldecode($_GET['alert']) : "";
        $categoryModel = new Category();
        $categories = $categoryModel->getAllCategories();
        $brandModel =  new Brand();
        $brands = $brandModel->getAllBrands();
        require_once 'layout/header.php';
        require_once "page/product/form-add-product.php";
        require_once 'layout/footer.php';
    }
    function addProduct()
    {
        if (isset($_POST['addsp'])) {
            $ten_san_pham = $_POST['ten_san_pham'];
            if ($_FILES['anh_san_pham']['name'] != "") {
                $target_dir = "../../../public/image/";
                $anh_san_pham = basename($_FILES["anh_san_pham"]["name"]);
                $target_file = $target_dir . $anh_san_pham;
                move_uploaded_file($_FILES["anh_san_pham"]["tmp_name"], $target_file);
            } else {
                $anh_san_pham = "";
            }
            $mo_ta = $_POST['mo_ta'];
            $gia_tien = $_POST['gia_tien'];
            $kich_thuoc = $_POST['kich_thuoc'];
            $so_luong = $_POST['so_luong'];
            $id_danh_muc = $_POST['id_danh_muc'];
            $id_thuong_hieu = $_POST['id_thuong_hieu'];
            $show_san_pham = $_POST['show_san_pham'];

            $ProductModel = new Product();
            $ProductModel->addProduct(
                $ten_san_pham,
                $anh_san_pham,
                $mo_ta,
                $gia_tien,
                $so_luong,
                $kich_thuoc,
                $id_danh_muc,
                $id_thuong_hieu,
                $show_san_pham
            );
            $alert = "Thêm sản phẩm thành công";
            echo '<script>window.location.href= "?url=form-add-product&alert=' . urlencode($alert) . '"</script>';
        }
    }
    function showFormUpdate()
    {
        $id_san_pham = $_GET['id'];
        $productModel = new Product();
        $row = $productModel->getOneProduct($id_san_pham);
        $categoryModel = new Category();;
        $categories = $categoryModel->getAllCategories();
        $brandModel =  new Brand();
        $brands = $brandModel->getAllBrands();
        require_once 'layout/header.php';
        require_once "page/product/form-update-product.php";
        require_once 'layout/footer.php';
    }
    function updateProduct()
    {
        if (isset($_POST['editsp'])) {
            $ten_san_pham = $_POST['ten_san_pham'];
            if ($_FILES['anh_san_pham']['name'] != "") {
                $target_dir = "../../../public/image/";
                $anh_san_pham = basename($_FILES["anh_san_pham"]["name"]);
                $target_file = $target_dir . $anh_san_pham;
                move_uploaded_file($_FILES["anh_san_pham"]["tmp_name"], $target_file);
            } else {
                $anh_san_pham = "";
            }
            $id_san_pham = $_GET['id'];
            $mo_ta = $_POST['mo_ta'];
            $gia_tien = $_POST['gia_tien'];
            $kich_thuoc = $_POST['kich_thuoc'];
            $so_luong = $_POST['so_luong'];
            $id_danh_muc = $_POST['id_danh_muc'];
            $id_thuong_hieu = $_POST['id_thuong_hieu'];
            $show_san_pham = $_POST['show_san_pham'];
            $productModel = new Product();
            $productModel->editProduct(
                $id_san_pham,
                $ten_san_pham,
                $anh_san_pham,
                $mo_ta,
                $gia_tien,
                $so_luong,
                $kich_thuoc,
                $id_danh_muc,
                $id_thuong_hieu,
                $show_san_pham
            );
            echo '<script>alert("Cập nhật thành công")</script>';
            echo '<script>window.location.href="?url=list-product"</script>';
        }
    }
    function deleteProduct()
    {
        $id_san_pham = $_GET['id'];
        $productModel = new Product();
        $productModel->deleteProduct($id_san_pham);
        echo '<script>alert("xóa thành công")</script>';
        echo '<script>window.location.href= "?url=list-product"</script>';
    }
}


//     case 'chitietsp':
//         $id_san_pham = $_GET['id'];
//         $listsp = listsp();
//         $listdm = listdm();
//         $listth = listth();
//         $load_one_sp = load_one_sp($id_san_pham);
//         $load_all_bien_the = load_all_bien_the($id_san_pham);
//         include "page/product/chitietsp.php";
//         break;


//     case 'editsp':
//         $id_san_pham = $_GET['id'];
//         $listdm = listdm();
//         $listth = listth();
//         $load_one_sp = load_one_sp($id_san_pham);
//         if (isset($_POST['editsp'])) {
//             $ten_san_pham = $_POST['ten_san_pham'];
//             if ($_FILES['anh_san_pham']['name'] != "") {
//                 $target_dir = "../../../public/image/";
//                 $anh_san_pham = basename($_FILES["anh_san_pham"]["name"]);
//                 $target_file = $target_dir . $anh_san_pham;
//                 move_uploaded_file($_FILES["anh_san_pham"]["tmp_name"], $target_file);
//             } else {
//                 $anh_san_pham = "";
//             }
//             $mo_ta = $_POST['mo_ta'];
//             $gia_tien = $_POST['gia_tien'];
//             $kich_thuoc = $_POST['kich_thuoc'];
//             $so_luong = $_POST['so_luong'];
//             $id_danh_muc = $_POST['id_danh_muc'];
//             $id_thuong_hieu = $_POST['id_thuong_hieu'];
//             $show_san_pham = $_POST['show_san_pham'];

//             editsp(
//                 $id_san_pham,
//                 $ten_san_pham,
//                 $anh_san_pham,
//                 $mo_ta,
//                 $gia_tien,
//                 $so_luong,
//                 $kich_thuoc,
//                 $so_luot_thich,
//                 $so_luot_xem,
//                 $id_danh_muc,
//                 $id_thuong_hieu,
//                 $show_san_pham
//             );

//             echo '<script>alert("Cập nhật thành công")</script>';
//             echo '<script>window.location.href = "index.php?act=listsp"</script>';
//         }
//         include "page/product/editsp.php";
//         break;
