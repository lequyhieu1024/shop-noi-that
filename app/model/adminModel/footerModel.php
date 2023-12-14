<?php 
function listft(){
    $sql = "SELECT * FROM footer";
    $result = pdo_query($sql);
    return $result;
}
function load_one_ft($id_footer){
    $sql = "SELECT * FROM footer WHERE id_footer = $id_footer";
    $result = pdo_query($sql);
    return $result;
}
function editft($id_footer,$title_footer){
    $sql = "UPDATE footer SET id_footer='$id_footer',title_footer='$title_footer' WHERE id_footer = $id_footer";
    pdo_execute($sql);
}