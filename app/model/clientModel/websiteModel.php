<?php 
function listws(){
    $sql = "SELECT * FROM website";
    $result = pdo_query_one($sql);
    return $result;
}    
?>