{% extends "partials/body.twig.php" %}

{% block title %}Alterar Receita - My Receitas {% endblock %}

{% block body %}
<h1>Alterar Receita</h1>
<a href="{{BASE}}receita/ver/{{receita.slug}}" class="btn btn-info">Ver receita</a>

<hr>

<form action="{{BASE}}receita/alterar/{{receitaId}}" onsubmit="return validar(true);" method="post">
    <div class="row">
        <div class="col-md-5 mt-3">
            <label for="txtTitulo">Título</label>
            <input type="hidden" id="txtId" value="receitaId" />
            <input type="text" id="txtTitulo" name="txtTitulo" class="form-control" placeholder="Título aqui" value="{{receita.titulo}}" />
        </div>

        <div class="col-md-4 mt-3">
            <label for="txtSlug">Slug</label>
            <input type="text" id="txtSlug" name="txtSlug" class="form-control" placeholder="titulo-aqui" value="{{receita.slug}}" />
        </div>

        <div class="col-md-3 mt-3">
            <label for="slCategoria">Categoria</label>
            <select name="slCategoria" id="slCategoria" class="form-control">
                {% for categoria in listaCategorias %}
                <option value="{{categoria.id}}" {{categoria.id == receita.categoriaId ? 'selected' : ''}}>{{categoria.titulo}}</option>
                {% endfor %}
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mt-3">
            <label for="txtLinhaFina">Linha fina</label>
            <input type="text" id="txtLinhaFina" name="txtLinhaFina" class="form-control" placeholder="Descreva a receita" minlength="10" maxlength="250" value="{{receita.linhaFina}}" />
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mt-3">
            <label for="txtThumb">Thumbnail</label>
            <input type="text" id="txtThumb" name="txtThumb" class="form-control" placeholder="https://mysite.com/img/img.jpg" minlength="1" maxlength="100" value="{{receita.thumb}}" />
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mt-3">
            <label for="txtDescricao">Conteúdo</label>
            <textarea id="txtDescricao" name="txtDescricao">{{receita.descricao|raw}}</textarea>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-10">
            <div id="dvAlert">
                <div class="alert alert-info">Preencha corretamente todos os campos</div>
            </div>
        </div>

        <div class="col-md-2 text-right">
            <input type="submit" value="Alterar" class="btn btn-success w-100">
        </div>
    </div>
</form>
<script src="{{BASE}}js/receita.js"></script>
<script src="{{BASE}}vendor/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('txtDescricao');
</script>
{% endblock %}