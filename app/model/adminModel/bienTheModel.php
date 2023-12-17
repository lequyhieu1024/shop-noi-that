<?php
    function addbt($mau_sac_bien_the,$anh_bien_the,$gia_tien_bien_the,$so_luong_bien_the,$id_san_pham){
        $sql ="INSERT INTO bien_the(mau_sac_bien_the, anh_bien_the, gia_tien_bien_the, so_luong_bien_the, id_san_pham) 
        VALUES ('$mau_sac_bien_the','$anh_bien_the','$gia_tien_bien_the','$so_luong_bien_the','$id_san_pham')";
        pdo_execute($sql);
    }
    function load_all_bien_the($id_san_pham){
        $sql = "SELECT * FROM san_pham 
        JOIN bien_the ON bien_the.id_san_pham = san_pham.id_san_pham
        where bien_the.id_san_pham = $id_san_pham";
        $result = pdo_query($sql);
        return $result;
    }
    function load_one_bien_the($id_bien_the){
        $sql = "SELECT * FROM bien_the 
        where id_bien_the = $id_bien_the";
        $result = pdo_query($sql);
        return $result;
    }
    function editbt($id_bien_the,$mau_sac_bien_the,$anh_bien_the,$gia_tien_bien_the,$so_luong_bien_the){
        if($anh_bien_the != ""){
            $sql = "UPDATE bien_the SET mau_sac_bien_the='$mau_sac_bien_the',
            anh_bien_the='$anh_bien_the',gia_tien_bien_the='$gia_tien_bien_the',
            so_luong_bien_the='$so_luong_bien_the' WHERE id_bien_the = $id_bien_the";
        }else{
            $sql = "UPDATE bien_the SET mau_sac_bien_the='$mau_sac_bien_the',
            gia_tien_bien_the='$gia_tien_bien_the',
            so_luong_bien_the='$so_luong_bien_the' WHERE id_bien_the = $id_bien_the";
        }
        pdo_execute($sql);
    }
    function deletebt($id_bien_the){
        $sql = "DELETE FROM bien_the WHERE id_bien_the = $id_bien_the";
        pdo_execute($sql);
    }
    ?>