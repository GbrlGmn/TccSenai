<?php

namespace App\DAO;

use App\Model\Login;

final class LoginDAO extends DAO
{
    public function autenticar(Login $model): ?Login
    {
        $sql = "SELECT * FROM usuario WHERE email = ? AND senha = SHA1(?)";
        $stmt = parent::$conexao->prepare($sql);
        $stmt->bindValue(1, $model->Email);
        $stmt->bindValue(2, $model->Senha);
        $stmt->execute();
        $login = $stmt->fetchObject(Login::class);
        return $login ?: null;
    }
}
