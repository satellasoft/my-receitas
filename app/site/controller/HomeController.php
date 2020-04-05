<?php

namespace app\site\controller;

use app\core\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
       $this->load('home/main', ['teste' => '123']);
    }
}
