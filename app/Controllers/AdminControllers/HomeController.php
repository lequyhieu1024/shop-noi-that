<?php

namespace app\Controllers\AdminControllers;

class HomeController
{
    function index()
    {
        require_once 'layout/header.php';
        require_once 'layout/home.php';
        require_once 'layout/footer.php';
    }
}
