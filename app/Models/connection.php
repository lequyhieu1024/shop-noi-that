<?php

require_once "env.php";
function getConnect()
{
    $connect = new PDO(
        "mysql:host=" . DBHOST
            . ";dbname=" . DBNAME
            . ";charset=" . DBCHARSET,
        DBUSER,
        DBPASS
    );
    return $connect;
}
function dataProgess($sql, $isAllData = true)
{
    $conn = getconnect();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if ($isAllData) {
        return $stmt->fetchAll();
    }
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function delete()
{
    if (isset($_GET["table"]) && isset($_GET['id']) && isset($_GET['iddl'])) {
        $table = $_GET['table'];
        $id = $_GET['id'];
        $iddl = $_GET['iddl'];
        $sql = "DELETE FROM $table WHERE $id = '$iddl'";
        dataProgess($sql);
    }
}
$alert = "";
