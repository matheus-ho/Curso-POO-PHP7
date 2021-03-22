<?php

class Pessoa{
    public $nome;
    public $idade;

    public function Falar(){
        echo $this->nome." de ". $this->idade." falou: ";
    }
}

$matheus = new Pessoa();
$matheus->nome = "Matheus Freire";
$matheus->idade = 21;
$matheus->Falar();
