<?php

namespace App\Controllers;

class Barbero extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('tablesBarbero');
        echo view('footer');
    }
}
