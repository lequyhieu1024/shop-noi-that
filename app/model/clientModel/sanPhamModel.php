<?php 
    // LOAD SẢN PHẨM RA TRANG CHỦ
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
    // LOAD SP THEO DANH MỤC
    function load_all_pro_of_categorie($id_danh_muc){
        $sql = "SELECT * FROM san_pham 
        JOIN danh_muc ON danh_muc.id_danh_muc = san_pham.id_danh_muc
        WHERE san_pham.id_danh_muc= $id_danh_muc";
        $result = pdo_query($sql);
        return $result;
    }
    // LOAD CHI TIẾT SẢN PHẨM
    function load_detail_pro($id_san_pham){
        $sql = "SELECT * FROM san_pham
        JOIN danh_muc ON danh_muc.id_danh_muc = san_pham.id_danh_muc
        LEFT JOIN bien_the ON bien_the.id_san_pham = san_pham.id_san_pham
        JOIN thuong_hieu ON thuong_hieu.id_thuong_hieu = san_pham.id_thuong_hieu
        WHERE san_pham.id_san_pham = $id_san_pham";
        $result = pdo_query($sql);
        return $result;
    }
    function load_related_pro($id_danh_muc,$id_san_pham){
        $sql = "SELECT * FROM san_pham WHERE id_danh_muc = $id_danh_muc AND id_san_pham != $id_san_pham AND show_san_pham = 1";
        $result = pdo_query($sql);
        return $result;
    }
    function load_newest_product_limit5(){
        $sql = "SELECT * 
        FROM san_pham 
        WHERE show_san_pham = 1 
        ORDER BY id_san_pham DESC 
        LIMIT 5";
        $result = pdo_query($sql);
        return $result;
    }
    function load_all_bien_the($id_san_pham){
        $sql = "SELECT * FROM san_pham 
        JOIN bien_the ON bien_the.id_san_pham = san_pham.id_san_pham
        where bien_the.id_san_pham = $id_san_pham";
        $result = pdo_query($sql);
        return $result;
    }