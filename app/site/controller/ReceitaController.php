<?php

namespace app\site\controller;

use app\core\Controller;
use app\site\model\ReceitaModel;
use app\site\model\CategoriaModel;

class ReceitaController extends Controller
{
    private $receitaModel;

    public function __construct()
    {
        $this->receitaModel = new ReceitaModel();
    }

    public function index()
    {
        $this->load('receita/main', []);
    }

    public function adicionar()
    {
        $this->load('receita/adicionar', [
            'listaCategorias' => (new CategoriaModel())->lerTodos()
        ]);
    }
}
