<?php 
switch($redirect){
    case 'chitietsp':
        $id_san_pham = $_GET['id'];
        $detail_pro = load_detail_pro($id_san_pham);
        $variant_pro = load_all_bien_the($id_san_pham);
        include "app/view/client/page/sanpham/chitietsp.php";
        break;
    case 'sptheodm':
        $id_danh_muc= $_GET['id'];
        $all_pro_of_cate = load_all_pro_of_categorie($id_danh_muc);
        include "app/view/client/page/sanpham/sptheodm.php";
        break;
}