<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function Test()
    {
     echo "Hello CodeIgniter";
    }
    public function Sample()
    {
        echo"Hello Bangladesh";
    }
}
