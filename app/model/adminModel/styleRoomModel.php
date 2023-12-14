<?php 
function listsr(){
    $sql = "SELECT * FROM style_room";
    $result = pdo_query($sql);
    return $result;
}
function addsr($ten_style,$hinh_anh,$mo_ta,$show_style){
    $sql = "INSERT INTO style_room(ten_style, hinh_anh, mo_ta,show_style) 
    VALUES ('$ten_style','$hinh_anh','$mo_ta','$show_style')";
    pdo_execute($sql);
}
function load_one_sr($id_style){
    $sql = "SELECT * FROM style_room WHERE id_style = $id_style";
    $result = pdo_query($sql);
    return $result;
}
function editsr($id_style, $ten_style, $hinh_anh, $mo_ta, $show_style){
    $sql = "UPDATE style_room SET id_style='$id_style',ten_style='$ten_style',
    hinh_anh='$hinh_anh',mo_ta='$mo_ta',show_style='$show_style'
    WHERE id_style = $id_style";
    pdo_execute($sql);
}
function deletesr($id_style){
    $sql = "DELETE FROM style_room WHERE id_style = $id_style";
    pdo_execute($sql);
}