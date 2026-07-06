<?php

namespace App\Controller;


use App\Model\Usuario;

final class UsuarioController
{
    public static function cadastro(): void
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $model = new Usuario();
            $model->Id = !empty($_POST['id']) ? $_POST['id'] : null;
            $model->Nome = $_POST['nome'];
            $model->Email = $_POST['email'];
            $model->Senha = $_POST['senha'];
            $model->save();

            header("Location: /usuario");
        } else {

            $model = new Usuario();

            if (isset($_GET['id'])) {
                $model = $model->getById((int) $_GET['id']);
            }

            include VIEWS . '/Usuario/form_usuario.php';
        }
    }
    public static function listar(): void
    {
        $usuario = new Usuario();
        $lista = $usuario->getAllRows();

        include VIEWS . '/Usuario/lista_usuario.php';
        include VIEWS . '/Layout/layout.php';
    }

    public static function delete(): void
    {
        $usuario = new Usuario();

        $usuario->delete((int) $_GET['id']);

        header("Location: /usuario");
    }
}
