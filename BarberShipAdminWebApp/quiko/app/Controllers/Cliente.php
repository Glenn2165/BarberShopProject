<?php

namespace App\Controllers;

class Cliente extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('tablesCliente');
        echo view('footer');
    }
}
