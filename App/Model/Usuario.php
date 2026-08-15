<?php

namespace App\Model;

use App\DAO\UsuarioDAO;

final class Usuario extends Model
{
    public ?int $Id = null;
    public ?string $Nome = null;
    public ?string $Email = null;
    public ?string $Senha = null;
    function save(): Usuario
    {
        return (new UsuarioDAO())->save($this);
    }
    function getById(int $Id): ?Usuario
    {
        return (new UsuarioDAO())->selectById($Id);
    }
    function getAllRows(): array
    {
        return (new UsuarioDAO())->select();
    }
    function delete(int $id): bool
    {
        return (new UsuarioDAO())->delete($id);
    }
}
