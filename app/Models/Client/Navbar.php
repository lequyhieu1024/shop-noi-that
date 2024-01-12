<?php
function getAllNavbars()
{
    $sql = "SELECT * FROM navbar";
    $result = dataProgess($sql);
    return $result;
}
