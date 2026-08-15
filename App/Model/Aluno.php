<?php

namespace App\Model;

use App\DAO\AlunoDAO;
use Exception;

final class Aluno extends Model
{
    public ?int $Id = null;
    public ?string $Nome = null;
    public ?string $RA = null;
    public ?string $Curso = null;
    public array $rows_alunos = [];
    function save(): Aluno
    {
        return (new AlunoDAO())->save($this);
    }
    function getById(int $id): ?Aluno
    {
        return (new AlunoDAO())->selectById($id);
    }
    function getAllRows(): array
    {
        return (new AlunoDAO())->select();
    }
    function delete(int $id): bool
    {
        return (new AlunoDAO())->delete($id);
    }
}
