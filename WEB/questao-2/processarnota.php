<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto_id = $_POST['id'];
    $nota = $_POST['nota'];
    
    echo "<!DOCTYPE html>
    <html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Agradecimento</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <h1>Obrigado por avaliar o Produto $produto_id com a nota $nota.</h1>
    </body>
    </html>";
} else {
    echo "Método inválido.";
}
?>
