<?php

namespace app\site\model;

use app\core\Model;

class ReceitaModel
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new Model();
    }
}
