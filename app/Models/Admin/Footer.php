<?php
function getFooter()
{
    $sql = "SELECT * FROM footer";
    $result = dataProgess($sql);
    return $result;
}
function getOneFooter($id_footer)
{
    $sql = "SELECT * FROM footer WHERE id_footer = $id_footer";
    $result = dataProgess($sql);
    return $result;
}
function editFooter($id_footer, $title_footer)
{
    $sql = "UPDATE footer SET id_footer='$id_footer',title_footer='$title_footer' WHERE id_footer = $id_footer";
    dataProgess($sql);
}
