<?php

namespace app\site\controller;
use app\core\Controller;

class SobreController extends Controller
{
    public function index(){
        $this->load('sobre/main');
    }
}
