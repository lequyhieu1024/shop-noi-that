<?php 

    function listsp(){
        $sql = "SELECT * FROM san_pham";
        $result = pdo_query($sql);
        return $result;
    }
    function load_one_sp($id_san_pham){
        $sql = "SELECT * FROM san_pham where id_san_pham = $id_san_pham";
        $result = pdo_query($sql);
        return $result;
    }
    
    function addsp($ten_san_pham,$anh_san_pham,$mo_ta,
    $gia_tien,$so_luong,$id_danh_muc,$id_thuong_hieu,$show_san_pham)
    {
        $sql ="INSERT INTO san_pham(ten_san_pham, anh_san_pham, mo_ta, 
        gia_tien, so_luong, id_danh_muc, id_thuong_hieu, show_san_pham)
        VALUES ('$ten_san_pham','$anh_san_pham','$mo_ta',
        '$gia_tien','$so_luong','$id_danh_muc','$id_thuong_hieu','$show_san_pham')";
        pdo_execute($sql);
    }

    function editsp($id_san_pham,$ten_san_pham,$anh_san_pham,$mo_ta,$gia_tien,$so_luong,$so_luot_thich,
        $so_luot_xem,$id_danh_muc,$id_thuong_hieu,$show_san_pham)
        {
            if($anh_san_pham != ""){
                $sql = "UPDATE san_pham SET id_san_pham='$id_san_pham',ten_san_pham='$ten_san_pham',anh_san_pham='$anh_san_pham',
                mo_ta='$mo_ta',gia_tien='$gia_tien',so_luong='$so_luong',so_luot_xem='$so_luot_xem',so_luot_thich='$so_luot_thich',
                id_danh_muc='$id_danh_muc',id_thuong_hieu='$id_thuong_hieu',show_san_pham='$show_san_pham' WHERE id_san_pham = $id_san_pham";
                
            }else{
                $sql = "UPDATE san_pham SET id_san_pham='$id_san_pham',ten_san_pham='$ten_san_pham',
                mo_ta='$mo_ta',gia_tien='$gia_tien',so_luong='$so_luong',so_luot_xem='$so_luot_xem',so_luot_thich='$so_luot_thich',
                id_danh_muc='$id_danh_muc',id_thuong_hieu='$id_thuong_hieu',show_san_pham='$show_san_pham' WHERE id_san_pham = $id_san_pham";
                }
                pdo_execute($sql);
            }

    function deletesp($id_san_pham){
        $sql = "DELETE FROM san_pham WHERE id_san_pham = $id_san_pham";
        pdo_execute($sql);
    }
    