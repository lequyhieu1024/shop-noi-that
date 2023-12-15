<?php
    function listdm(){
        $sql = "SELECT * FROM danh_muc WHERE show_danh_muc = 1";
        $result = pdo_query($sql);
        return $result;
    }
?>