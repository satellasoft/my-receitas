{% extends "partials/body.twig.php" %}

{% block title %} Receitas - My Receitas {% endblock %}

{% block body %}
<h1>Receitas</h1>
<a href="{{BASE}}receita/adicionar/" class="btn btn-primary">Nova Receitas</a>

<hr>

<div class="overflow-auto">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Nome</th>
                <th>Slug</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {% for categoria in listaCategoria %}
            <tr>
                <td>{{ categoria.id }}</td>
                <td>{{ categoria.titulo }}</td>
                <td>{{ categoria.slug }}</td>
                <td>
                    <a href="{{BASE}}categoria/editar/{{ categoria.id }}" class="btn btn-warning">Editar</a>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>

{% endblock %}