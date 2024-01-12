<?php

namespace app\Controllers\AdminControllers;

use app\Models\Admin\Category;

class CategoryController
{
    function listCategory()
    {
        $CategoryModel = new Category();
        $categories = $CategoryModel->getAllCategories();
        require_once 'layout/header.php';
        require_once "page/category/list-categories.php";
        require_once 'layout/footer.php';
    }
    function showFormAdd()
    {
        $alert = isset($_GET['alert']) ? urldecode($_GET['alert']) : "";
        require_once 'layout/header.php';
        require_once "page/category/form-add-category.php";
        require_once 'layout/footer.php';
    }
    function addCategory()
    {
        if (isset($_POST['adddm'])) {
            $ten_danh_muc = $_POST['ten_danh_muc'];
            $show_danh_muc = $_POST['show_danh_muc'];

            $CategoryModel = new Category();
            $CategoryModel->addCategory($ten_danh_muc, $show_danh_muc);
            $alert = "Thêm danh mục thành công";
            echo '<script>window.location.href="?url=form-add-category&alert=' . urlencode($alert) . '"</script>';
        }
    }
    function showFormUpdate()
    {
        $id_danh_muc = $_GET['id'];
        $CategoryModel = new Category();
        $category = $CategoryModel->getOneCategory($id_danh_muc);
        require_once 'layout/header.php';
        require_once "page/category/form-update-category.php";
        require_once 'layout/footer.php';
    }
    function updateCategory()
    {
        if (isset($_POST['editdm'])) {
            $id_danh_muc = $_GET['id'];
            $ten_danh_muc = $_POST['ten_danh_muc'];
            $show_danh_muc = $_POST['show_danh_muc'];
            $CategoryModel = new Category();
            $CategoryModel->editCategory($id_danh_muc, $ten_danh_muc, $show_danh_muc);
            echo '<script>alert("Cập nhật thành công")</script>';
            echo '<script>window.location.href = "index.php?url=list-category"</script>';
        }
    }
    function deleteCategory()
    {
        $id_danh_muc = $_GET['id'];
        $CategoryModel = new Category();
        $CategoryModel->deleteCategory($id_danh_muc);
        echo '<script>alert("xóa thành công")</script>';
        echo '<script>window.location.href= "?url=list-category"</script>';
    }
}
