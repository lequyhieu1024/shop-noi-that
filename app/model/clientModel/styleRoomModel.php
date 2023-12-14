<?php 
function listsr(){
    $sql = "SELECT * FROM style_room
    WHERE show_style = 1";
    $result = pdo_query($sql);
    return $result;
}
?>