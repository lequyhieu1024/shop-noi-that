<?php 
    function listctft(){
        $sql = "SELECT * FROM content_footer
        JOIN footer ON footer.id_footer = content_footer.id_footer
        ORDER BY content_footer.id_footer ASC";
        $result = pdo_query($sql);
        return $result;
    }
    function addctft($content,$id_content){
        $sql = "INSERT INTO content_footer(content, id_footer) VALUES ('$content','$id_content')";
        pdo_execute($sql);
    }
    function load_one_ctft($id_content){
        $sql = "SELECT * FROM content_footer
        JOIN footer ON footer.id_footer = content_footer.id_footer
        WHERE id_content = $id_content";
        $result = pdo_query($sql);
        return $result;
    }
    function editctft($id_content,$content,$id_footer){
        $sql = "UPDATE content_footer SET content='$content',id_footer='$id_footer' WHERE id_content = $id_content";
        pdo_execute($sql);
    }
    function deletectft($id_content){
        $sql = "DELETE FROM content_footer WHERE id_content = $id_content";
        pdo_execute($sql);
    }
?>