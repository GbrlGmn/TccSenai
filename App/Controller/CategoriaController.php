<?php

namespace App\Controller;

use App\Model\Categoria;

final class CategoriaController
{
    public static function cadastro(): void
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $model = new Categoria();
            $model->Id = !empty($_POST['id']) ? $_POST['id'] : null;
       
            $model->Descricao = $_POST['desc'];

            $model->save();

            header("Location: /categoria");
        } else {

            $model = new Categoria();

            if (isset($_GET['id'])) {
                $model = $model->getById((int) $_GET['id']);
            }

            include VIEWS . '/Categoria/form_categoria.php';
        }
    }
    public static function listar(): void
    {
        $categoria = new Categoria();
        $lista = $categoria->getAllRows();

        include VIEWS . '/Categoria/lista_categoria.php';
    }

    public static function delete(): void
    {
        $categoria = new Categoria();

        $categoria->delete((int) $_GET['id']);

        header("Location: /categoria");
    }
}
