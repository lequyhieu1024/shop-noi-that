<?php 
    function load_newest_product_limit8(){
        $sql = "SELECT * 
        FROM san_pham 
        WHERE show_san_pham = 1 
        ORDER BY id_san_pham DESC 
        LIMIT 8";
        $result = pdo_query($sql);
        return $result;
    }
    function load_most_viewed_product_limit8(){
        $sql = "SELECT * FROM san_pham
        WHERE show_san_pham = 1
        ORDER BY so_luot_xem DESC
        LIMIT 8";
        $result = pdo_query($sql);
        return $result;
    }