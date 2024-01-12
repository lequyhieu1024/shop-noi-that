<?php
// session_start();
// if (isset($_SESSION['id_role'])) {
//     if ($_SESSION['id_role'] === 1) {
require_once "../../../vendor/autoload.php";
require_once "../../Models/connection.php";

use app\Controllers\AdminControllers\BrandController;
use app\Controllers\AdminControllers\CategoryController;
use app\Controllers\AdminControllers\HomeController;
use app\Controllers\AdminControllers\ProductController;

$HomeController = new HomeController();
$ProductController = new ProductController();
$CategoryController = new CategoryController();
$BrandController = new BrandController();

$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case "/":
        $HomeController->index();
        break;

        // CRUD sản phẩm
    case "list-product":
        $ProductController->listProduct();
        break;
    case "form-add-product":
        $ProductController->showFormAdd();
        break;
    case "add-product":
        $ProductController->addProduct();
        break;
    case "form-update-product":
        $ProductController->showFormUpdate();
        break;
    case "update-product":
        $ProductController->updateProduct();
        break;
    case 'delete-product':
        $ProductController->deleteProduct();
        break;

        //xem chi tiết sản phẩm
    case 'detail-product':
        $ProductController->detailProduct();
        break;
        // CRUD danh mục
    case 'list-category':
        $CategoryController->listCategory();
        break;
    case 'form-add-category':
        $CategoryController->showFormAdd();
        break;
    case 'add-category':
        $CategoryController->addCategory();
        break;
    case 'form-update-category':
        $CategoryController->showFormUpdate();
        break;
    case 'update-category':
        $CategoryController->updateCategory();
        break;
    case 'delete-category':
        $CategoryController->deleteCategory();
        break;
        //CRUD brand
    case 'list-brand':
        $BrandController->listBrand();
        break;
    case 'form-add-brand':
        $BrandController->showFormAdd();
        break;
    case 'add-brand':
        $BrandController->addBrand();
        break;
    case 'form-update-brand';
        $BrandController->showFormUpdate();
        break;
    case 'update-brand';
        $BrandController->updateBrand();
        break;
    case 'delete-brand';
        $BrandController->deleteBrand();
        break;
}

//     }
// } else {
//     echo '<img style="width:100%;height:100%" src="../../../public/image/404.png" alt="">';
// }
