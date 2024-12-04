<?php
$produtos = [
    1 => 'Produto 1',
    2 => 'Produto 2',
    3 => 'Produto 3'
];

echo '<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>';

echo '<h1>Lista de Produtos</h1>';
foreach ($produtos as $id => $nome) {
    echo "<a class='produto-link' href='avaliar_produto.php?id=$id'>$nome</a><br>";
}

echo '</body></html>';
?>
