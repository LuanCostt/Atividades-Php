<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    if(
        isset($_POST["nameProduct"])
        && isset($_POST["categoryProduct"])
        && isset($_POST["qtdProduct"])
        && isset($_POST["priceProduct"])
    ){
    $nameProduct = $_POST["nameProduct"];
    $categoryProduct = $_POST["categoryProduct"];
    $priceProduct = $_POST["priceProduct"];
    $qtdProduct = $_POST["qtdProduct"];
    echo $nameProduct. "<br>";
    echo $categoryProduct. "<br>";
    echo $priceProduct. "<br>";
    echo $qtdProduct;

}
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro produto</title>
</head>
<body>
    <form method="POST">
        <label for="nameProduct">
            <p>Nome do Produto</p>
            <input name="nameProduct" type="text" id="nameProduct" placeholder="Nome do produto">
        </label>
        <label for="categoryProduct">
            <p>Categoria do Produto</p>
            <input name="categoryProduct" type="text" id="categoryProduct" placeholder="Categoria do produto">
        </label>
        <label for="priceProduct">
            <p>Preço do Produto</p>
            <input name="priceProduct" type="number" id="priceProduct" placeholder="Preço do produto">
        </label>
        <label for="qtdProduct">
            <p>Quantidade do Produto</p>
            <input name="qtdProduct" type="number" id="qtdProduct" placeholder="Quantidade do produto">
        </label>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>