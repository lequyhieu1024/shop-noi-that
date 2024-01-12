<?php
function getAllNavbars()
{
    $sql = "SELECT * FROM navbar";
    $result = dataProgess($sql);
    return $result;
}
function getOneNavbar($id_navbar)
{
    $sql = "SELECT * FROM navbar WHERE id_navbar = $id_navbar";
    $result = dataProgess($sql);
    return $result;
}
function editNavbar($id_navbar, $ten_navbar, $link_navbar)
{
    $sql = "UPDATE navbar SET ten_navbar='$ten_navbar',link_navbar='$link_navbar' WHERE id_navbar = $id_navbar";
    dataProgess($sql);
}
