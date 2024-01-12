<?php
function getAllContentFooter()
{
    $sql = "SELECT * FROM content_footer
        JOIN footer ON footer.id_footer = content_footer.id_footer
        ORDER BY content_footer.id_footer ASC";
    $result = dataProgess($sql);
    return $result;
}
function getOneContentFooter($id_content)
{
    $sql = "SELECT * FROM content_footer
        JOIN footer ON footer.id_footer = content_footer.id_footer
        WHERE id_content = $id_content";
    $result = dataProgess($sql);
    return $result;
}
function addContentFooter($content, $id_content)
{
    $sql = "INSERT INTO content_footer(content, id_footer) VALUES ('$content','$id_content')";
    dataProgess($sql);
}

function editContentFooter($id_content, $content, $id_footer)
{
    $sql = "UPDATE content_footer SET content='$content',id_footer='$id_footer' WHERE id_content = $id_content";
    dataProgess($sql);
}
function deleteContentFooter($id_content)
{
    $sql = "DELETE FROM content_footer WHERE id_content = $id_content";
    dataProgess($sql);
}
