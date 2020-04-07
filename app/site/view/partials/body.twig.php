{% apply spaceless %}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{BASE}}img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{BASE}}css/bootstrap.min.css">
    <link rel="stylesheet" href="{{BASE}}css/style.css">

    <title>{% block title %} {% endblock %}</title>

    {% block head %}{% endblock %}
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="max-width">
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{BASE}}">
                            <img src="{{BASE}}img/logo.png" alt="My Receitas" class="logo-top" />
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{BASE}}categoria/">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{BASE}}receita/">Receitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{BASE}}sobre/">Sobre</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="get" action="{{BASE}}pesquisa/" id="frmPesquisa" onsubmit="return pesquisar();">
                    <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar" minlength="2" required name="txtPesquisa" id="txtPesquisa">
                    <button class="btn btn-secondary my-2 my-sm-0" type="button" onclick="pesquisar();">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="max-width">
        {% block body %}{% endblock %}
    </div>

    <script src="{{BASE}}js/script.js"></script>
</body>

</html>
{% endapply %}