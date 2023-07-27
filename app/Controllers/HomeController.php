<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        return view("home");
    }

    public function profil()
    {
        return view("profil");
    }

    public function gallery()
    {
        return view("gallery");
    }
}
