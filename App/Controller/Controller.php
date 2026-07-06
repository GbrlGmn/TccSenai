<?php

namespace App\Controller;

abstract class Controller
{
    protected static function isProtected()
    {
        if (!isset($_SESSION['usuario_logado']))
            header("Location: /login");
    }

    final protected static function render(string $view): void{
        
    }
}
