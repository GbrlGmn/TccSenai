<?php

namespace App\Controller;

use App\Model\Autor;

final class AutorController
{
    public static function cadastro(): void
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $model = new Autor();
            $model->Id = !empty($_POST['id']) ? $_POST['id'] : null;
            $model->Nome = $_POST['nome'];
            $model->DataNasc = $_POST['data'];
            $model->CPF = $_POST['cpf'];
            $model->save();

            header("Location: /autor");
        } else {

            $model = new Autor();

            if (isset($_GET['id'])) {
                $model = $model->getById((int) $_GET['id']);
            }

            include VIEWS . '/Autor/form_autor.php';
        }
    }
    public static function listar(): void
    {
        $autor = new Autor();
        $lista = $autor->getAllRows();

        include VIEWS . '/Autor/lista_autor.php';
    }

    public static function delete(): void
    {
        $autor = new Autor();

        $autor->delete((int) $_GET['id']);

        header("Location: /autor");
    }
}
