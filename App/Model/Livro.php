<?php

namespace App\Model;

use App\DAO\LivroDAO;
use Exception;

final class Livro extends Model
{
    public ?int $Id = null;
    public ?int $Id_Categoria = null;
    public array $Id_Autores = [];
    public ?string $Titulo = null;
    public ?string $Isbn = null;
    public ?string $Editora = null;
    public ?string $Ano = null;
    public array $rows_categorias = [];
    public array $rows_autores = [];
    function save(): Livro
    {
        return new LivroDAO()->save($this);
    }
    function getById(int $id): ?Livro
    {
        return new LivroDAO()->selectById($id);
    }
    function getAllRows(): array
    {
        $this->rows = new LivroDAO()->select();
        return $this->rows;
    }
    function delete(int $id): bool
    {
        return new LivroDAO()->delete($id);
    }
}
