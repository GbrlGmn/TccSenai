<?php

/**
 * Declaração de namespaces com sub-namespaces:
 * https://www.php.net/manual/pt_BR/language.namespaces.nested.php
 */
namespace App\Controller;

/**
 * Definimos aqui que nossa classe precisa incluir uma classe de outro subnamespace
 * do projeto, no caso a classe Aluno do sub-namespace Model
 */
use App\Model\Aluno;

/**
 * Classes Controller são responsáveis por processar as requisições do usuário.
 * Isso significa que toda vez que um usuário chama uma rota, um método (função)
 * de uma classe Controller é chamado.
 * O método poderá devolver uma View (fazendo um include), acessar uma Model (para
 * buscar algo no banco de dados), redirecionar o usuário de rota, ou mesmo,
 * chamar outra Controller.
 * Uma classe definida como final não pode ter filhos, ou seja, nenhuma outra classe
 * pode fazer o extends dela, por exemplo: class Teste extends AlunoController.
 * Veja mais sobre final aqui: https://www.php.net/manual/pt_BR/language.oop5.final.php
 */
final class AlunoController
{
    /**
     * Declaração de membros de classe estáticos:
     * https://www.php.net/manual/pt_BR/language.oop5.static.php
     * Note o tipo de retorno void, ou seja, esse método
     * é um procedimento e não tem retorno.
     */
    public static function cadastro() : void
    {
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $model = new Aluno();
            $model->Id = !empty($_POST['id']) ? $_POST['id'] : null;
            $model->Nome = $_POST['nome'];
            $model->RA = $_POST['ra'];
            $model->Curso = $_POST['curso'];
            $model->save();

            header("Location: /aluno");

        } else {

            $model = new Aluno();

            if(isset($_GET['id']))
            {              
                $model = $model->getById( (int) $_GET['id'] );
            }

            include VIEWS . '/Aluno/form_aluno.php';
        }        
    }

    
    public static function listar() : void
    {
        $aluno = new Aluno();
        $lista = $aluno->getAllRows();

        include VIEWS . '/Aluno/lista_aluno.php';
    } 
    
    
    public static function delete() : void
    {
        $aluno = new Aluno();

        $aluno->delete( (int) $_GET['id']);

        header("Location: /aluno");
    }
}