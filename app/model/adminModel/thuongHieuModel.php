<?php 

    function listth(){
        $sql = "SELECT * FROM thuong_hieu";
        $result = pdo_query($sql);
        return $result;
    }

    function addth($ten_thuong_hieu,$anh_thuong_hieu,$show_thuong_hieu){
        $sql ="INSERT INTO thuong_hieu(ten_thuong_hieu, anh_thuong_hieu,show_thuong_hieu) VALUES ('$ten_thuong_hieu','$anh_thuong_hieu','$show_thuong_hieu')";
        pdo_execute($sql);
    }

    function editth($id_thuong_hieu, $ten_thuong_hieu, $anh_thuong_hieu, $show_thuong_hieu){
        if($anh_thuong_hieu != ""){
            $sql ="UPDATE thuong_hieu SET id_thuong_hieu='$id_thuong_hieu',ten_thuong_hieu='$ten_thuong_hieu',anh_thuong_hieu='$anh_thuong_hieu',show_thuong_hieu='$show_thuong_hieu' WHERE id_thuong_hieu = $id_thuong_hieu";
        }else{
            $sql ="UPDATE thuong_hieu SET id_thuong_hieu='$id_thuong_hieu',ten_thuong_hieu='$ten_thuong_hieu',show_thuong_hieu='$show_thuong_hieu' WHERE id_thuong_hieu = $id_thuong_hieu";
        }
        pdo_execute($sql);
    }

    function deleteth($id_thuong_hieu){
        $sql = "DELETE FROM thuong_hieu WHERE id_thuong_hieu = $id_thuong_hieu";
        pdo_execute($sql);
    }

    function load_one_th($id_thuong_hieu){
        $sql = "SELECT * FROM thuong_hieu WHERE id_thuong_hieu = $id_thuong_hieu";
        $result = pdo_query($sql);
        return $result;
    }