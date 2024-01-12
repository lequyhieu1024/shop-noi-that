<?php
function GetAllRooms()
{
    $sql = "SELECT * FROM style_room
    WHERE show_style = 1";
    $result = dataProgess($sql);
    return $result;
}
