<?php

namespace app\Models\Admin;

class Account
{
    function getAdminAccount()
    {
        $sql = "SELECT * FROM tai_khoan WHERE id_role = 1";
        $result = dataProgess($sql);
        return $result;
    }
    function getClientAccount()
    {
        $sql = "SELECT * FROM tai_khoan WHERE id_role = 0";
        $result = dataProgess($sql);
        return $result;
    }
}
