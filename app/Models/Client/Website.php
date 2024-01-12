<?php
function getAllWebsite()
{
    $sql = "SELECT * FROM website";
    $result = dataProgess($sql);
    return $result;
}
