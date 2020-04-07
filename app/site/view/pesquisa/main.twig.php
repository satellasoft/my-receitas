{% extends "partials/body.twig.php" %}

{% block title %} Pesquisa - My Receitas {% endblock %}

{% block body %}
<h1>Pesquisa</h1>

<p>Exibindo <span class="font-weight-bold">{{quantidadeResultado}}</span> resultado(s) para o termo <span class="font-weight-bold">{{termo}}</span>.</p>
<hr>

<div class="overflow-auto">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Nome</th>
                <th>Slug</th>
                <th>Categoria</th>
                <th>Publicado</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {% for receita in receitas %}
            <tr>
                <td>{{ receita.id }}</td>
                <td>{{ receita.titulo }}</td>
                <td>{{ receita.slug }}</td>
                <td>{{ receita.categoriaTitulo }}</td>
                <td>{{ receita.data|date('d/m/Y H:i:s') }}</td>
                <td>
                    <a href="{{BASE}}receita/editar/{{ receita.id }}" class="btn btn-warning">Editar</a>
                    <a href="{{BASE}}receita/ver/{{ receita.id }}" class="btn btn-info ml-2">Ver</a>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}