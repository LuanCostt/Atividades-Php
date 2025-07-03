<?php

require "Carros.php";
require "Animais.php";
require "mediaPonderada.php";


$carro = new Carros();
$carro2 = new Carros();
$carroEletrico = new CarroEletrico();

$aluno = new Aluno();
echo exibirDados();

$gato = new Gato();
echo emitirSom($gato);

$carroEletrico ->cor = "Branco";
$carroEletrico ->marca = "BYD";
$carroEletrico ->modelo = "SEAL";
$carroEletrico ->autonomia = "372Km";

$carro ->cor = "Preto";
$carro ->marca = "BMW";
$carro ->modelo = "320i 2.0 16V Turbo M Sport";

$carro2 ->cor = "Branco";
$carro2 ->marca = "Fiat";
$carro2 ->modelo = "Uno velho";
echo"<br>";
echo ("Cor: ".$carro->cor."<br>". "Marca: ".$carro->marca."<br>"."Modelo: ". $carro->modelo."<br>"."<hr>");
echo ("Cor: ".$carro2->cor."<br>". "Marca: ".$carro2->marca."<br>"."Modelo: ". $carro2->modelo."<hr>");
echo ("Cor: ".$carroEletrico->cor."<br>". "Marca: ".$carroEletrico->marca."<br>"."Modelo: ". $carroEletrico->modelo."<br>"."Autonomia: ".$carroEletrico->autonomia."<hr>");  


?>