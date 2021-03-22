<?php

class Login{
    public static $user;

    public static function verificaLogin() {
        echo "O usuário ".self::$user." está logado";
    }

    public function sairSistema() {
        echo "O usuário saiu";
    }
}

Login::$user = "admin";
Login::verificaLogin();
echo "<br>";
$login = new Login();
$login->sairSistema();