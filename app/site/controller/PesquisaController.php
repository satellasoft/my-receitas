<?php

namespace app\site\controller;

use app\core\Controller;
use app\site\model\ReceitaModel;

class PesquisaController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->showMessage(
            'Página não existe',
            'Página não existe ou não foi encontrada',
            '',
            404
        );
        return;
    }

    public function p(string $termo)
    {
        $termo = filter_var($termo, FILTER_SANITIZE_STRING);
        $termo = strip_tags($termo);

        if (strlen(trim($termo)) <= 2) {
            $this->showMessage(
                'Formulário inválido',
                'Os dados fornecidos estão incompletos ou são inválidos',
                ''
            );
            return;
        }
        $receitas = (new ReceitaModel())->pesquisar($termo);

        $this->load('pesquisa/main', [
            'receitas' => $receitas,
            'termo' => $termo,
            'quantidadeResultado' => count($receitas)
        ]);
    }
}
