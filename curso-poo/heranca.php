<?php
class Veiculo{
    public $modelo;
    public $cor;
    public $ano;


public function Andar(){
        echo "Andou <br>";
}

public function Parar(){
        echo "<br> Parou <br>";
}
}


class Carro extends Veiculo{
  public function ligarLimpador (){
      echo "Limpando";
  }
}
class Moto extends Veiculo{
   public function colocarCavalete (){
       echo "Levantando no cavalete";
   }
}

$carro = new Carro();
$carro->modelo = "Parati";
$carro->cor = "Prata";
$carro->ano = 1991;
$carro->Andar();
$carro->ligarLimpador();
echo "<br>";
var_dump($carro);

$moto = new Moto();
$moto->modelo = "CG 150";
$moto->cor = "Prata";
$moto->ano = 2006;
$moto->Parar();
$moto->colocarCavalete();
echo "<br>";
var_dump($moto);