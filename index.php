<?php

echo"<h1>Hello World</h1>";
echo"<hr>";

$nome = "Ana";
$idade = 23;

if($nome === "Ana" and $idade === 23){
    echo 'Seja bem vindo(a) ' . $nome. '<br>';
}

echo saudacao($nome);

if($idade > 18){
    echo 'Você é maior de idade: '.$idade. '<br>';

}
else{
    echo 'Você é menor de idade: '.$idade . '<br>';
}

function saudacao($nome): string {
    return 'Olá '. $nome. '<br>';
}

var_dump($nome,  $idade);
?>