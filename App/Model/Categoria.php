<?php

namespace App\Model;

use App\DAO\CategoriaDAO;

final class Categoria
{
    public $Id, $Nome, $Descricao;

    function save(): Categoria
    {
        return (new CategoriaDAO())->save($this);
    }

    function getById(int $Id): ?Categoria
    {
        return (new CategoriaDAO())->selectById($Id);
    }
    function getAllRows(): array
    {
        return (new CategoriaDAO())->select();
    }
    function delete(int $id): bool
    {
        return (new CategoriaDAO())->delete($id);
    }
}
