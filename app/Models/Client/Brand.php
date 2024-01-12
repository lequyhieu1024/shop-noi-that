<?php
function getAllBrands()
{
    $sql = "SELECT * FROM thuong_hieu 
    WHERE show_thuong_hieu = 1
    ORDER BY id_thuong_hieu ASC
    LIMIT 6";
    $result = dataProgess($sql);
    return $result;
}
