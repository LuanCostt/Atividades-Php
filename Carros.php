<?php

class Carros{
    public $cor;
    public $modelo;
    public $marca;
    public function acelerar(){
        echo"Velozes e Furiosos 🚗";
    }
    public function frear(){
        echo "🚔🚔🚘🚨🚨 PARE O CARRO!!! ⭐⭐⭐⭐⭐⭐";
    }
}

class CarroEletrico extends Carros{
    public $autonomia;
    public function recarregar(){
        echo "Recarregando...";
    }
}

?>