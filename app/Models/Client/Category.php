<?php
function getAllCategories()
{
    $sql = "SELECT * FROM danh_muc WHERE show_danh_muc = 1";
    $result = dataProgess($sql);
    return $result;
}
