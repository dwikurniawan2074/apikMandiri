<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda',
        ];
        return view("home", $data);
    }

    public function profil()
    {
        $data = [
            'title' => 'Profil',
        ];
        return view("profil", $data);
    }

    public function gallery()
    {
        $data = [
            'title' => 'Gallery',
        ];
        return view("gallery", $data);
    }

    public function donate()
    {
        $data = [
            'title' => 'Donasi',
        ];
        return view("donate", $data);
    }
}
