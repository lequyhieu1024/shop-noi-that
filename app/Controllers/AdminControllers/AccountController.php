<?php

namespace app\Controlles\AdminControlles;

use app\Models\Admin\Account;

class AccountController
{
    function adminAccount()
    {
        $account = new Account();
        $account = $account->getAdminAccount();
        return $account;
    }
    function clientAccount()
    {
        $account = new Account();
        $account = $account->getClientAccount();
        return $account;
    }
}
