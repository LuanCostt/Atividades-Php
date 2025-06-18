<?php
require 'helper.php';
echo validarEnderecoEmail('luanexemplo@gmail.com');
echo validarEnderecoEmail('https://google.com');

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
/**
 * Função de saudacao
 * @param string Nome do usuario
 * @return string Mensagem de saudação com o nome do usuario
 * @author Luan <>
 */
function saudacao($nome): string {
    return 'Olá '. $nome. '<br>';
}

var_dump($nome,  $idade);
echo'<br>';

$arr = array(1,2,3,4,5);
$arr2 = [1,2,3,4,5];

echo $arr [0]. " " . $arr2 [1];
foreach ($arr2 as $number){
    echo "Número: ". $number."<br>";
}
?>