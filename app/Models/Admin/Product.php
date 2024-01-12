<?php

namespace app\Models\Admin;

class Product
{

    function getAllProduct()
    {
        $sql = "SELECT * FROM san_pham";
        $result = dataProgess($sql);
        return $result;
    }
    function getOneProduct($id_san_pham)
    {
        $sql = "SELECT *, ten_danh_muc,ten_thuong_hieu FROM san_pham
        JOIN thuong_hieu ON san_pham.id_thuong_hieu = thuong_hieu.id_thuong_hieu
        JOIN danh_muc ON san_pham.id_danh_muc = danh_muc.id_danh_muc            
        where id_san_pham = $id_san_pham";
        $result = dataProgess($sql, false);
        return $result;
    }


    function addProduct(
        $ten_san_pham,
        $anh_san_pham,
        $mo_ta,
        $gia_tien,
        $so_luong,
        $kich_thuoc,
        $id_danh_muc,
        $id_thuong_hieu,
        $show_san_pham
    ) {
        $sql = "INSERT INTO san_pham(ten_san_pham, anh_san_pham, mo_ta, 
        gia_tien, so_luong,kich_thuoc, id_danh_muc, id_thuong_hieu, show_san_pham)
        VALUES ('$ten_san_pham','$anh_san_pham','$mo_ta',
        '$gia_tien','$so_luong','$kich_thuoc','$id_danh_muc','$id_thuong_hieu','$show_san_pham')";
        dataProgess($sql);
    }

    function editProduct(
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
    ) {
        if ($anh_san_pham != "") {
            $sql = "UPDATE san_pham SET id_san_pham='$id_san_pham',ten_san_pham='$ten_san_pham',anh_san_pham='$anh_san_pham',
                mo_ta='$mo_ta',gia_tien='$gia_tien',so_luong='$so_luong',kich_thuoc = '$kich_thuoc',
                id_danh_muc='$id_danh_muc',id_thuong_hieu='$id_thuong_hieu',show_san_pham='$show_san_pham' WHERE id_san_pham = $id_san_pham";
        } else {
            $sql = "UPDATE san_pham SET id_san_pham='$id_san_pham',ten_san_pham='$ten_san_pham',
                mo_ta='$mo_ta',gia_tien='$gia_tien',so_luong='$so_luong',kich_thuoc = '$kich_thuoc',
                id_danh_muc='$id_danh_muc',id_thuong_hieu='$id_thuong_hieu',show_san_pham='$show_san_pham' WHERE id_san_pham = $id_san_pham";
        }
        dataProgess($sql);
    }

    function deleteProduct($id_san_pham)
    {
        $sql = "DELETE FROM san_pham WHERE id_san_pham = $id_san_pham";
        dataProgess($sql);
    }
}
