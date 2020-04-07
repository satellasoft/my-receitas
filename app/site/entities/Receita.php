<?php

namespace app\site\entities;

class Receita
{
    private $id;
    private $titulo;
    private $slug;
    private $linhaFina;
    private $descricao;
    private $categoriaId;
    private $categoriaTitulo;
    private $data;
    private $thumb;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function setSlug($slug)
    {
        $this->slug = strtolower($slug);
    }

    public function setLinhaFina($linhaFina)
    {
        $this->linhaFina = $linhaFina;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function setCategoriaId($categoriaId)
    {
        $this->categoriaId = $categoriaId;
    }

    public function setCategoriaTitulo($categoriaTitulo)
    {
        $this->categoriaTitulo = $categoriaTitulo;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function setThumb($thumb)
    {
        $this->thumb = $thumb;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function getLinhaFina()
    {
        return $this->linhaFina;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getCategoriaId()
    {
        return $this->categoriaId;
    }

    public function getCategoriaTitulo()
    {
        return $this->categoriaTitulo;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getThumb()
    {
        return $this->thumb;
    }
}
