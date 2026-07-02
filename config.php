<?php
// 1 O DIRETORIO BASE
// 2 ONDE ESTAO AS VIWES
// 3 ACESSO AO BANCO DE DADOS

define('BASE_DIR', dirname(__FILE__, 2));
define('VIEWS', BASE_DIR . '/App/View');

$_ENV['db']['host'] = "localhost:3306";
$_ENV['db']['user'] = "root";
$_ENV['db']['password'] = "";
$_ENV['db']['database'] = "biblioteca";