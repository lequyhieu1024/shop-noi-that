<?php 
    switch($act){
        case 'listsp':
            echo '<script>alert("danh sách sản phẩm")</script>';
            break;

        case 'addsp':
            echo '<script>alert("Thêm sản phẩm")</script>';
            break;

        case 'editsp':
            echo '<script>alert("sửa sản phẩm")</script>';
            break;

        case 'xoasp':
            echo '<script>alert("xóa sản phẩm")</script>';
            break;
    }
?>