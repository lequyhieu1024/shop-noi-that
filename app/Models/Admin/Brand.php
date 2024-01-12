<?php

namespace app\Models\Admin;

class Brand
{

    function getAllBrands()
    {
        $sql = "SELECT * FROM thuong_hieu";
        $result = dataProgess($sql);
        return $result;
    }

    function addBrand($ten_thuong_hieu, $anh_thuong_hieu, $show_thuong_hieu)
    {
        $sql = "INSERT INTO thuong_hieu(ten_thuong_hieu, anh_thuong_hieu,show_thuong_hieu) VALUES ('$ten_thuong_hieu','$anh_thuong_hieu','$show_thuong_hieu')";
        dataProgess($sql);
    }

    function editBrand($id_thuong_hieu, $ten_thuong_hieu, $anh_thuong_hieu, $show_thuong_hieu)
    {
        if ($anh_thuong_hieu != "") {
            $sql = "UPDATE thuong_hieu SET id_thuong_hieu='$id_thuong_hieu',ten_thuong_hieu='$ten_thuong_hieu',anh_thuong_hieu='$anh_thuong_hieu',show_thuong_hieu='$show_thuong_hieu' WHERE id_thuong_hieu = $id_thuong_hieu";
        } else {
            $sql = "UPDATE thuong_hieu SET id_thuong_hieu='$id_thuong_hieu',ten_thuong_hieu='$ten_thuong_hieu',show_thuong_hieu='$show_thuong_hieu' WHERE id_thuong_hieu = $id_thuong_hieu";
        }
        dataProgess($sql);
    }

    function deleteBrand($id_thuong_hieu)
    {
        $sql = "DELETE FROM thuong_hieu WHERE id_thuong_hieu = $id_thuong_hieu";
        dataProgess($sql);
    }

    function getOneBrand($id_thuong_hieu)
    {
        $sql = "SELECT * FROM thuong_hieu WHERE id_thuong_hieu = $id_thuong_hieu";
        $result = dataProgess($sql, false);
        return $result;
    }
}
