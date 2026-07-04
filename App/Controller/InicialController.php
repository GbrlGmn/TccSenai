<?php

namespace App\Controller;

final class InicialController extends Controller
{
    public static function index(): void
    {
        parent::isProtected();

        $titulo = "Dashboard";

        $view = VIEWS . "/Home/index.php";

        include VIEWS . "/Layout/layout.php";
    }
}
