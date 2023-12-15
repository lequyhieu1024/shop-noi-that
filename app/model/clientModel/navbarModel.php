<?php 
function listnb(){
    $sql = "SELECT * FROM navbar";
    $result = pdo_query($sql);
    return $result;
}