<?php 

function listdm(){
    $sql = "SELECT * FROM danh_muc";
    $result = pdo_query($sql);
    return $result;
}
function load_one_dm($id_danh_muc){
    $sql = "SELECT * FROM danh_muc WHERE id_danh_muc = $id_danh_muc";
    $result = pdo_query($sql);
    return $result;
}

function adddm($ten_danh_muc,$show_danh_muc){
    $sql = "INSERT INTO danh_muc(ten_danh_muc,show_danh_muc) VALUES ('$ten_danh_muc','$show_danh_muc')";
    pdo_execute($sql);
}
function editdm($id_danh_muc,$ten_danh_muc,$show_danh_muc){
    $sql = "UPDATE danh_muc SET ten_danh_muc = '$ten_danh_muc' , show_danh_muc = '$show_danh_muc' WHERE id_danh_muc = $id_danh_muc";
    pdo_execute($sql);
}
function deletedm($id_danh_muc){
    $sql = "DELETE FROM danh_muc WHERE id_danh_muc = $id_danh_muc"; 
    pdo_execute($sql);
}