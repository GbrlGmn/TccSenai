<?php

namespace App\Controller;

final class InicialController extends Controller
{
    public static function index(): void
    {
        parent::isProtected();
        include VIEWS . '/Layout/layout.php';
    }
}
