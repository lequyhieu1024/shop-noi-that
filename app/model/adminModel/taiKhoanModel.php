<?php 
    function taikhoanqtv(){
        $sql = "SELECT * FROM tai_khoan WHERE id_role = 1";
        $result = pdo_query($sql);
        return $result;
    }
    function taikhoankh(){
        $sql = "SELECT * FROM tai_khoan WHERE id_role = 0";
        $result = pdo_query($sql);
        return $result;
    }