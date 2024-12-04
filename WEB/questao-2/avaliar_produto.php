<?php

$produtos = [
    1 => 'Produto 1',
    2 => 'Produto 2',
    3 => 'Produto 3'
];

$produto_id = isset($_GET['id']) ? $_GET['id'] : null;
$produto_nome = $produto_id && isset($produtos[$produto_id]) ? $produtos[$produto_id] : null;

if ($produto_nome) {
    echo "<!DOCTYPE html>
    <html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Avaliar Produto</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <h1>Avalie o Produto: $produto_nome</h1>";

    echo "<form action='processarnota.php' method='POST'>
            <input type='hidden' name='id' value='$produto_id'>
            <label for='nota'>Qual a sua nota para o Produto $produto_nome (1 a 5)?</label><br>
            <input type='number' name='nota' min='1' max='5' required><br><br>
            <input type='submit' value='Enviar Avaliação'>
          </form>";

    echo "</body></html>";
} else {
    echo "<h1>Produto não encontrado!</h1>";
    exit;
}
?>
