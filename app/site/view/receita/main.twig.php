{% extends "partials/body.twig.php" %}

{% block title %} Receitas - My Receitas {% endblock %}

{% block body %}
<h1>Receitas</h1>
<a href="{{BASE}}receita/adicionar/" class="btn btn-primary">Nova Receitas</a>

<hr>

<form action="{{BASE}}receita/" method="post">
    <div class="row">
        <div class="col-md-8">
            <select name="slCategoria" id="slCategoria" class="form-control">
                {% for categoria in listaCategorias %}
                <option value="{{categoria.id}}" {{categoria.id == categoriaId ? 'selected' : ''}}>{{categoria.titulo}}</option>
                {% endfor %}
            </select>
        </div>
        <div class="col-md-4">
            <input type="submit" value="Buscar" class="btn btn-success w-100" />
        </div>
    </div>
</form>

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
                    <a href="{{BASE}}receita/ver/{{ receita.slug }}" class="btn btn-info ml-2">Ver</a>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>

{% endblock %}