<?php
function getFooter()
{
    $sql = "SELECT *,footer.id_footer, GROUP_CONCAT(content_footer.content) as contents
    FROM footer
    JOIN content_footer ON footer.id_footer = content_footer.id_footer
    GROUP BY footer.id_footer";
    $result = dataProgess($sql);
    return $result;
}
