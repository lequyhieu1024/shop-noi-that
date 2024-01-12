<?php
function GetAllRooms()
{
    $sql = "SELECT * FROM style_room";
    $result = dataProgess($sql);
    return $result;
}
function addRoom($ten_style, $hinh_anh, $mo_ta, $show_style)
{
    $sql = "INSERT INTO style_room(ten_style, hinh_anh, mo_ta,show_style) 
    VALUES ('$ten_style','$hinh_anh','$mo_ta','$show_style')";
    dataProgess($sql);
}
function getOneRoom($id_style)
{
    $sql = "SELECT * FROM style_room WHERE id_style = $id_style";
    $result = dataProgess($sql, false);
    return $result;
}
function editRoom($id_style, $ten_style, $hinh_anh, $mo_ta, $show_style)
{
    if ($hinh_anh != "") {
        $sql = "UPDATE style_room SET id_style='$id_style',ten_style='$ten_style',
        hinh_anh='$hinh_anh',mo_ta='$mo_ta',show_style='$show_style'
        WHERE id_style = $id_style";
    } else {
        $sql = "UPDATE style_room SET id_style='$id_style',ten_style='$ten_style',
        mo_ta='$mo_ta',show_style='$show_style'
        WHERE id_style = $id_style";
    }
    dataProgess($sql);
}
function deleteRoom($id_style)
{
    $sql = "DELETE FROM style_room WHERE id_style = $id_style";
    dataProgess($sql);
}
