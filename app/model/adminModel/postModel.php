<?php 
    function addpost($title_bai_viet,$anh_bai_viet,$noi_dung_bai_viet,$ngay_dang_bai,$id_san_pham,$id_danh_muc,$id_thuong_hieu,$show_bai_viet){
        $sql = "INSERT INTO bai_viet(title_bai_viet, anh_bai_viet, noi_dung_bai_viet, ngay_dang_bai, id_san_pham, id_danh_muc,id_thuong_hieu, show_bai_viet) 
        VALUES ('$title_bai_viet','$anh_bai_viet','$noi_dung_bai_viet','$ngay_dang_bai','$id_san_pham','$id_danh_muc','$id_thuong_hieu','$show_bai_viet')";
        pdo_execute($sql);
    }
    function listpost(){
        $sql = "SELECT * FROM bai_viet
        LEFT JOIN thuong_hieu ON thuong_hieu.id_thuong_hieu = bai_viet.id_thuong_hieu
        LEFT JOIN san_pham ON san_pham.id_san_pham = bai_viet.id_san_pham
        LEFT JOIN danh_muc ON danh_muc.id_danh_muc = bai_viet.id_danh_muc       
        ";
        $result = pdo_query($sql);
        return $result;
    }
    function load_one_post($id_bai_viet){
        $sql = "SELECT * FROM bai_viet WHERE id_bai_viet = $id_bai_viet";
        $result = pdo_query($sql);
        return $result;
    }
    function editpost($id_bai_viet,$title_bai_viet,$anh_bai_viet,$noi_dung_bai_viet,$id_thuong_hieu,$id_danh_muc,$id_san_pham,$show_bai_viet){
        if($anh_bai_viet != ""){
            $sql = "UPDATE bai_viet SET title_bai_viet='$title_bai_viet',
            anh_bai_viet='$anh_bai_viet',noi_dung_bai_viet='$noi_dung_bai_viet',
            id_thuong_hieu='$id_thuong_hieu',id_danh_muc='$id_danh_muc',
            id_san_pham='$id_san_pham',show_bai_viet='$show_bai_viet'
            WHERE id_bai_viet = $id_bai_viet";
        }else{
            $sql = "UPDATE bai_viet SET title_bai_viet='$title_bai_viet',
            noi_dung_bai_viet='$noi_dung_bai_viet',
            id_thuong_hieu='$id_thuong_hieu',id_danh_muc='$id_danh_muc',
            id_san_pham='$id_san_pham',show_bai_viet='$show_bai_viet'
            WHERE id_bai_viet = $id_bai_viet";
        }
        pdo_execute($sql);
    }