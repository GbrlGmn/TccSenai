<?php

/**
 * Declaração de namespaces com sub-namespaces
 * 
 */

namespace App\Controller;

/**
 * Definimos aqui que nossa classe precisa incluir uma classe de outro subnamespace
 * do projeto, no caso a classe Aluno do sub-namespace Model
 */

use App\Model\Aluno;
use Exception;

/**
 * Classes Controller são responsáveis por processar as requisições do usuário.
 * Isso significa que toda vez que um usuário chama uma rota, um método (função)
 * de uma classe Controller é chamado.
 * O método poderá devolver uma View (fazendo um include), acessar uma Model (para
 * buscar algo no banco de dados), redirecionar o usuário de rota, ou mesmo,
 * chamar outra Controller.
 * Uma classe definida como final não pode ter filhos, ou seja, nenhuma outra classe
 * pode fazer o extends dela, por exemplo: class Teste extends AlunoController.
 */
final class AlunoController extends Controller
{
    public static function index(): void
    {
        parent::isProtected();

        $model = new Aluno();
        $titulo = 'Alunos';

        try {
            $model->rows_alunos = $model->getAllRows();
        } catch (Exception $e) {
            $model->setError("Ocorreu um erro ao buscar os alunos:");
            $model->setError($e->getMessage());
        }

        parent::render('Aluno/lista_aluno.php', $model, $titulo);
    }


    public static function cadastro(): void
    {
        parent::isProtected();

        $model = new Aluno();

        try {
            if (parent::isPost()) {
                $model->Id = !empty($_POST['id']) ? $_POST['id'] : null;
                $model->Nome = $_POST['nome'];
                $model->RA = $_POST['ra'];
                $model->Curso = $_POST['curso'];
                $model->save();

                parent::redirect("/aluno");
            } else {

                if (isset($_GET['id'])) {
                    $model = $model->getById((int) $_GET['id']);
                }
            }
        } catch (Exception $e) {

            $model->setError($e->getMessage());
        }

        $titulo = $model->Id ? 'Editar Aluno' : 'Cadastrar Aluno';
        parent::render('Aluno/form_aluno.php', $model, $titulo);
    }


    public static function listar(): void
    {
        parent::isProtected();
        $aluno = new Aluno();
        $lista = $aluno->getAllRows();
        $titulo = 'Alunos';
        $view = VIEWS . '/Aluno/lista_aluno.php';

        include VIEWS . '/Layout/layout.php';
    }


    public static function delete(): void
    {
        parent::isProtected();

        $model = new Aluno();

        try {
            $model->delete((int) $_GET['id']);
            parent::redirect("/aluno");
            return; // importante, pra não continuar depois do redirect

        } catch (Exception $e) {
            $model->setError("Ocorreu um erro ao excluir o aluno:");
            $model->setError($e->getMessage());
            $model->rows_alunos = $model->getAllRows(); // recarrega a lista pro render funcionar
        }

        $titulo = 'Alunos';
        parent::render('Aluno/lista_aluno.php', $model, $titulo);
    }
}
