<?php
// LOAD SẢN PHẨM RA TRANG CHỦ
function getNewestProductLimit8()
{
    $sql = "SELECT * 
        FROM san_pham 
        WHERE show_san_pham = 1 
        ORDER BY id_san_pham DESC 
        LIMIT 8";
    $result = dataProgess($sql);
    return $result;
}
function getHighestViewedProductLimit8()
{
    $sql = "SELECT * FROM san_pham
        WHERE show_san_pham = 1
        ORDER BY so_luot_xem DESC
        LIMIT 8";
    $result = dataProgess($sql);
    return $result;
}
// LOAD SP THEO DANH MỤC
function getAllProductOfCategory($id_danh_muc)
{
    $sql = "SELECT * FROM san_pham 
        JOIN danh_muc ON danh_muc.id_danh_muc = san_pham.id_danh_muc
        WHERE san_pham.id_danh_muc= $id_danh_muc";
    $result = dataProgess($sql);
    return $result;
}
// LOAD CHI TIẾT SẢN PHẨM
function getDetailProduct($id_san_pham)
{
    $sql = "SELECT * FROM san_pham
        JOIN danh_muc ON danh_muc.id_danh_muc = san_pham.id_danh_muc
        LEFT JOIN bien_the ON bien_the.id_san_pham = san_pham.id_san_pham
        JOIN thuong_hieu ON thuong_hieu.id_thuong_hieu = san_pham.id_thuong_hieu
        WHERE san_pham.id_san_pham = $id_san_pham";
    $result = dataProgess($sql, false);
    return $result;
}
function getRelatedProduct($id_danh_muc, $id_san_pham)
{
    $sql = "SELECT * FROM san_pham WHERE id_danh_muc = $id_danh_muc AND id_san_pham != $id_san_pham AND show_san_pham = 1";
    $result = dataProgess($sql);
    return $result;
}
function getAllVariants($id_san_pham)
{
    $sql = "SELECT * FROM san_pham 
        JOIN bien_the ON bien_the.id_san_pham = san_pham.id_san_pham
        where bien_the.id_san_pham = $id_san_pham";
    $result = dataProgess($sql);
    return $result;
}
function getNewestProductLimit10($id_san_pham)
{
    $sql = "SELECT * 
        FROM san_pham 
        WHERE show_san_pham = 1 AND id_san_pham != $id_san_pham
        ORDER BY id_san_pham DESC Limit 10";
    $result = dataProgess($sql);
    return $result;
}
