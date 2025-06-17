<?php

$produtos = [
    "abacaxi"=>["chave" => "Abacaxi", "preco" => "$10,00"],
    "manga"=>["chave" => "Manga", "preco" => "$7,00"],
    "uva"=>["chave" => "Uva", "preco" => "$4,00"]
];
foreach ($produtos as $produto) {
    echo "Nome: ".$produto["chave"]." , ". "Preço: ".$produto["preco"]. "<br>";
};

?>