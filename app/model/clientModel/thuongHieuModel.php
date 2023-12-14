<?php 
function listth(){
    $sql = "SELECT * FROM thuong_hieu 
    WHERE show_thuong_hieu = 1
    ORDER BY id_thuong_hieu ASC
    LIMIT 6";
    $result = pdo_query($sql);
    return $result;
}
?>