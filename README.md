# My Receitas

Aplicação desenvolvida durante o curso de **PHP MVC: Crie um site de receitas**, ministrado pela Academy SatellaSoft (https://academy.satellasoft.com).

## Sobre o projeto

O intuito do curso é mostrar na prática como trabalhar com o padrão MVC, através das camadas de visão, modelo e controladora.

A aplicação permite fazer o gerenciamento de categorias e receitas, assim exibindo o seu conteúdo de forma organizada.

Incluímos também o CKEditor, para facilitar a edição e o gerenciamento das postagens.

### Camada de visão

Utilizando o template engine Twig, criar um layout completamente modular e flexível, permitindo o escalonamento da aplicação através de componentes.

### Camada de controle

Utilizando a programação orientada a objetos juntamente com autoloading PSR-4, criamos métodos e classes que permitem gerenciar as regras de negócio da aplicação e controlar o fluxo de comunicação com as duas outras camadas.

### Camada de modelo

Utilizando o banco de dados MariaDB/MySQL, construímos classes que permitem fazer o gerenciamento correto e seguro das informações que são transicionadas no banco de dados.

## Softwares utilizados

Ainda durante o desenvolvimento do projeto, utilizamos o Composer para realizar o gerenciamento de dependências e o MySQL Workbench para que a gente possa criar o banco de dados.

## Configurações

Para realizar as configurações do projeto, basta acessar o arquivo **app/config/global.php** e alterar o valor das constantes.

```php

<?php

define('BASE', '/my-receitas/'); //Qual o diretório que o projeto se encontra
define('UNSET_COUNT', 1); //Quantos paths devem ser removidos da URI

define('DB_HOST', 'localhost'); //Servidor de banco de dados
define('DB_USER', 'root'); //Usuário de acesso ao banco de dados
define('DB_PASS', ''); //Senha de acesso ao banco de dados
define('DB_NAME', 'myreceitas'); //Nome do banco de dados
```

Na root do projeto contém o arquivo **.htaccess**, nele também é necessário fazer uma modificação.

```c
RewriteRule ^((?!public/).*)$ my-receitas/public/$1 [L,NC]
```

Observe que na linha acima temos o caminho para a pasta public, definida como **my-receitas/public/**, sendo assim, troque o caminho **my-receitas** pelo nome da pasta do seu projeto. Obs. Caso esteja na root, remova o caminho **my-receitas**.

## Links uteis

* https://academy.satellasoft.com/course/php-mvc-criando-um-site-de-receitas
* https://twig.symfony.com
* https://getcomposer.org
* https://www.mysql.com/products/workbench/
* https://code.visualstudio.com
* https://www.apachefriends.org/pt_br/
