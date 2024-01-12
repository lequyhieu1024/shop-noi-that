<?php

namespace app\Models\Admin;

class Category
{

    function getAllCategories()
    {
        $sql = "SELECT * FROM danh_muc";
        $result = dataProgess($sql);
        return $result;
    }
    function getOneCategory($id_danh_muc)
    {
        $sql = "SELECT * FROM danh_muc WHERE id_danh_muc = $id_danh_muc";
        $result = dataProgess($sql, false);
        return $result;
    }

    function addCategory($ten_danh_muc, $show_danh_muc)
    {
        $sql = "INSERT INTO danh_muc(ten_danh_muc,show_danh_muc) VALUES ('$ten_danh_muc','$show_danh_muc')";
        dataProgess($sql);
    }
    function editCategory($id_danh_muc, $ten_danh_muc, $show_danh_muc)
    {
        $sql = "UPDATE danh_muc SET ten_danh_muc = '$ten_danh_muc' , show_danh_muc = '$show_danh_muc' WHERE id_danh_muc = $id_danh_muc";
        dataProgess($sql);
    }
    function deleteCategory($id_danh_muc)
    {
        $sql = "DELETE FROM danh_muc WHERE id_danh_muc = $id_danh_muc";
        dataProgess($sql);
    }
}
