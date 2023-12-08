<?php 
    // Lấy ra danh sách sản phẩm
    function listsp(){
        $sql = "SELECT * FROM san_pham";
        $result = pdo_query($sql);
        return $result;
    }
    // Thêm sản phẩm
    function addsp($ten_san_pham,$anh_san_pham,$mo_ta,
    $gia_tien,$so_luong,$id_danh_muc,$id_thuong_hieu,$show_san_pham)
    {
        $sql ="INSERT INTO san_pham(ten_san_pham, anh_san_pham, mo_ta, 
        gia_tien, so_luong, id_danh_muc, id_thuong_hieu, show_san_pham)
        VALUES ('$ten_san_pham','$anh_san_pham','$mo_ta',
        '$gia_tien','$so_luong','$id_danh_muc','$id_thuong_hieu','$show_san_pham')";
        pdo_execute($sql);
    }
    // Sửa sản phẩm