<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        return view("template/templateHome");
    }

    public function profil()
    {
        return view("profil");
    }
}
