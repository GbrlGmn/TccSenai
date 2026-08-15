<?php

namespace App\Controller;

use App\Model\Usuario;
use Exception;

final class UsuarioController extends Controller
{
    public static function cadastro(): void
    {
        parent::isProtected();
        $model = new Usuario();
        try {
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $model->Id = !empty($_POST['id']) ? $_POST['id'] : null;
                $model->Nome = $_POST['nome'];
                $model->Email = $_POST['email'];
                $model->Senha = $_POST['senha'];
                $model->save();
                parent::redirect("/usuario");
                return;
            }
            if (isset($_GET['id'])) {
                $model = $model->getById((int) $_GET['id']);
            }
        } catch (Exception $e) {
            $model->setError($e->getMessage());
        }
        $titulo = $model->Id ? 'Editar Usuário' : 'Cadastrar Usuário';
        parent::render('Usuario/form_usuario.php', $model, $titulo);
    }
    public static function listar(): void
    {
        parent::isProtected();
        $usuario = new Usuario();
        $titulo = 'Usuários';
        try {
            $usuario->rows = $usuario->getAllRows();
        } catch (Exception $e) {
            $usuario->setError($e->getMessage());
        }
        parent::render('Usuario/lista_usuario.php', $usuario, $titulo);
    }
    public static function delete(): void
    {
        parent::isProtected();
        $usuario = new Usuario();
        $usuario->delete((int) $_GET['id']);
        parent::redirect("/usuario");
    }
}
