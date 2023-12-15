<?php 
function listnb(){
    $sql = "SELECT * FROM navbar";
    $result = pdo_query($sql);
    return $result;
}
function load_one_nb($id_navbar){
    $sql = "SELECT * FROM navbar WHERE id_navbar = $id_navbar";
    $result = pdo_query($sql);
    return $result;
}
function editnb($id_navbar,$ten_navbar,$link_navbar){
    $sql = "UPDATE navbar SET ten_navbar='$ten_navbar',link_navbar='$link_navbar' WHERE id_navbar = $id_navbar";
    pdo_execute($sql);
}