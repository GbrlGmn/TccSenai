<?php

namespace App\Model;

use App\DAO\AutorDAO;

final class Autor
{
    public $Id, $Nome, $DataNasc, $CPF;

    function save(): Autor
    {
        return (new AutorDAO())->save($this);
    }

    function getById(int $Id): ?Autor
    {
        return (new AutorDAO())->selectById($Id);
    }
    function getAllRows(): array
    {
        return (new AutorDAO())->select();
    }
    function delete(int $id): bool
    {
        return (new AutorDAO())->delete($id);
    }
}
