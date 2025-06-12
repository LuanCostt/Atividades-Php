<?php
$jogador = 100;
$vitoria = 20;
$derrota = 15;

$win= $jogador + $vitoria;
$loser= $jogador - $derrota;
echo"Cenário de uma vitoria é: ".$jogador." + ".$vitoria." = ". $win. '<br>';
echo"Cenário de uma derrota é: ".$jogador." - ".$derrota." = ". $loser;
?>