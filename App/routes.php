<?php

/**
 * Para saber mais sobre namespaces:
 * https://www.php.net/manual/pt_BR/language.namespaces.rationale.php
 */

use App\Controller\{
    AlunoController,
    AutorController,
    CategoriaController,
    UsuarioController,
    LoginController,
    InicialController
};

/* Para saber mais sobre a função 
 * parse_url: https://www.php.net/manual/pt_BR/function.parse-url.php
 */

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

/**
 * Para saber mais estrutura switch,
 * leia: https://www.php.net/manual/pt_BR/control-structures.switch.php
 */
switch ($url) {
    case '/':
        InicialController::index();
        break;

    case '/login':
        LoginController::index();
        break;

    case 'logout':
        LoginController::logout();
        break;
    case '/aluno':
        /**
         * Para saber mais sobre o Operador de Resolução de Escopo (::), 
         * leia: https://www.php.net/manual/pt_BR/language.oop5.paamayim-nekudotayim.php
         */
        AlunoController::listar();
        break;

    case '/aluno/cadastro':
        AlunoController::cadastro();
        break;

    case '/aluno/delete':
        AlunoController::delete();
        break;

    case '/autor':
        AutorController::listar();
        break;

    case '/autor/cadastro':
        AutorController::cadastro();
        break;

    case '/autor/delete':
        AutorController::delete();
        break;

    case '/categoria':
        CategoriaController::listar();
        break;

    case '/categoria/cadastro':
        CategoriaController::cadastro();
        break;

    case '/categoria/delete':
        CategoriaController::delete();
        break;

    case '/usuario':
        UsuarioController::listar();
        break;

    case '/usuario/cadastro':
        UsuarioController::cadastro();
        break;

    case '/usuario/delete':
        UsuarioController::delete();
        break;
}
