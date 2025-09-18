<?php
/*
2. Crie um array associativo para armazenar informações de um produto:
 
a-Nome do produto, preço, quantidade em estoque.
b-Adicione 05 produtos e exiba as informações formatadas da seguinte forma:
    Produto: TV
    Preço: R$ 5.600,00
    Qtd: 08
c-Atualize o preço de todos os produto e exiba todos eles novamente, simulando um desconto de 10% em todos os produtos.
 
*/
$produtos = [
    [
        "produto"=> "TV",
        "preco"=> 5600.00,
        "qtd"=> 8,
    ],
    [
        "produto"=> "Notebook",
        "preco"=> 3399.00,
        "qtd"=> 15,
    ],
    [
        "produto"=> "Monitor",
        "preco"=> 1349.99,
        "qtd"=> 20,
    ],
    [
        "produto"=> "PlayStation 5",
        "preco"=> 3905.07,
        "qtd"=> 9,
    ],
    [
        "produto"=> "Robô Aspirador",
        "preco"=> 1129.90,
        "qtd"=> 42,
    ],
];


$mensagem = "";
$mensagemDesconto = "";


foreach ($produtos as $produto) {
    $mensagem .=    "<li> Produtos: ". $produto["produto"]."</li>".
                    "<li> Preço: R$". $produto["preco"]."</li>".
                    "<li> Quantidade:". $produto["qtd"]."</li><br>";
}


/*function desconto ($produto){
    if (isset($produto["preco"])){
        return $produto["preco"]-=$produto["preco"]*0.1;
    }
}


$mensagemAtt = array_map("desconto", $produtos["preco"]);


foreach ($mensagemAtt as $produtoAtt) {
    $mensagemDesconto .= "<li> Preço: R$ " . number_format($produtoAtt, 2, ",", ".") . "</li>" ;
}


*/
function desconto ($produto){
    if (isset($produto["preco"]) && isset($produto["produto"]) && isset($produto["qtd"])){
        return $mensagemAtt =   "<li>Produto: ".$produto["produto"]."</li>".
                                "<li>Preço: R$ ".($produto["preco"]-=$produto["preco"]*0.1) ."</li>".
                                "<li>Quantidade: ".$produto["qtd"]."</li>";
    }
}
$mensagemAtt = array_map("desconto", $produtos);


foreach ($mensagemAtt as $produtoAtt) {
    $mensagemDesconto .= "<li>" . $produtoAtt . "</li>" ;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../css/estilo.css">
</head>
<body>
    <form action="">
        <ul>
            <?php
                echo $mensagem;
            ?>
            <p>-----------DESCONTO-----------</p>
            <?php
                echo $mensagemDesconto;
            ?>
        </ul>
    </form>
</body>
</html>