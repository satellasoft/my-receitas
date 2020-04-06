{% extends "partials/body.twig.php" %}

{% block title %} {{receita.titulo}} - My Receitas {% endblock %}

{% block body %}
<h1>{{receita.titulo}}</h1>
<h5>{{receita.linhaFina}}</h5>
<a href="{{BASE}}receita/editar/{{receita.id}}" class="btn btn-primary">Editar Receita</a>

<div class="overflow-auto mt-3">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Slug</th>
                <th>Categoria</th>
                <th>Publicação</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{receita.id}}</td>
                <td>{{receita.slug}}</td>
                <td>{{receita.categoriaTitulo}}</td>
                <td>{{receita.data | date('d/m/Y H:i:s')}}</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="mt-3">
    {{receita.descricao | raw}}
</div>
<hr>

{% endblock %}