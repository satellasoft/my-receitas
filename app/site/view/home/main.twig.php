{% extends "partials/body.twig.php" %}

{% block title %} Home - My Receitas {% endblock %}

{% block body %}
<h1>Home</h1>
<hr>

{% for receitas in listaReceitas %}
<div class="row">
    {% for receita in receitas %}
    <div class="col-md-3">
        <div class="card border-info mb-3">
            <div class="card-header"></div>
            <div class="card-body">
                <h4 class="card-title">{{receita.titulo}}</h4>
                <img src="{{receita.thumb}}" alt="{{receita.titulo}}" class="w-100" />
                <a href="{{BASE}}receita/ver/{{receita.slug}}" class="btn btn-info w-100">Acessar</a>
            </div>
        </div>
    </div>
    {% endfor %}
</div>
{% endfor %}



{% endblock %}