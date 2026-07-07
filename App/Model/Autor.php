<?php

namespace App\Model;

use App\DAO\AutorDAO;
use Exception;

final class Autor extends Model
{
    public ?int $Id = null;
    public ?string $Nome = null;
    public ?string $Data_Nascimento = null;
    public ?string $CPF = null;

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
