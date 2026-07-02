<?php

spl_autoload_register(function ($nome_da_classe){

    $arquivo = BASE_DIR . "/" . str_replace("\\", "/", $nome_da_classe) . ".php";

    if (file_exists($arquivo)) {
        require_once $arquivo;
    } else {
        throw new Exception("Arquivo não encontrado: " . $arquivo);
    }

});