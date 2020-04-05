<?php

namespace app\site\controller;

class AboutController
{
    public function __construct()
    {

    }

    public function index(){
        echo "estamos na index da About";
    }

    public function teste($name = ''){
        echo $name . ' <<<< TESTE!!! :D';
    }
}
