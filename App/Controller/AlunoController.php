<?php

namespace App\Controller;
use App\Model\Aluno;

final class AlunoController{
    public static function cadastro(): void{
    echo "vou mostrar o formulario de cadastro de aluno";
    }
    public static function listar(): void{
    echo "listagem de alunos";
    }
}