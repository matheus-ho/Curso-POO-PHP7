<?php

class Pessoa{
    const nome = "Matheus";

    public function exibirNome(){
        echo self::nome;
    }
}

class Matheus extends Pessoa{
    const nome = "Freire";

    public function exibirNome(){
        echo parent::nome;
    }
}

$Matheus = new Matheus();
$Matheus->exibirNome();