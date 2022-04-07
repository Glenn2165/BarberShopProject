<?php

namespace App\Controllers;

class Cita extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('tablesCita');
        echo view('footer');
    }
}
