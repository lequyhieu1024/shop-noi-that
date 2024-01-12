<?php
switch ($redirect) {
    case 'chitietsp':
        $id_san_pham = $_GET['id'];
        $detail_pro = load_detail_pro($id_san_pham);
        $variant_pro = load_all_bien_the($id_san_pham);
        $newest_pro = load_newest_product($id_san_pham);
        foreach ($detail_pro as $iddm) : endforeach;
        $id_danh_muc = $iddm['id_danh_muc'];
        $related_pro = load_related_pro($id_danh_muc, $id_san_pham);
        include "app/view/client/page/sanpham/chitietsp.php";
        break;
    case 'sptheodm':
        $id_danh_muc = $_GET['id'];
        $all_pro_of_cate = load_all_pro_of_categorie($id_danh_muc);
        include "app/view/client/page/sanpham/sptheodm.php";
        break;
    case 'wishlist':
        include "app/view/client/page/wishlist/wishlist.php";
        break;

    case 'addtocart':
        if (isset($_POST['addtocart'])) {
            // Lấy dữ liệu từ ajax đẩy lên
            $productId = $_POST['id_san_pham'];
            $productName = $_POST['ten_san_pham'];
            $productPrice = $_POST['gia_tien'];
            $so_luong = $_POST['so_luong'];

            // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
            $index = array_search($productId, array_column($_SESSION['cart'], 'id_san_pham'));
            // array_column() trích xuất một cột từ mảng giỏ hàng và trả về một mảng chứ giá trị của cột id
            if ($index !== false) {
                $_SESSION['cart'][$index]['quantity'] += 1;
            } else {
                // Nếu sản phẩm chưa tồn tại thì thêm mới vào giỏ hàng
                $product = [
                    'id_san_pham' => $productId,
                    'ten_san_pham' => $productName,
                    'gia_tien' => $productPrice,
                    'quantity' => $so_luong
                ];
                $_SESSION['cart'][] = $product;
            }
            // Trả về số lượng sản phẩm của giỏ hàng
            echo count($_SESSION['cart']);
        } else {
            echo 'Yêu cầu không hợp lệ';
        }
}
