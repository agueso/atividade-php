<?php
session_start();

$nome = $_COOKIE['nome'] ?? 'Visitante';
$idade = $_SESSION['idade'] ?? 'desconhecida';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas-Vindas</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
   <section class="boas-vindas">
        <h1>Bem-vindo(a), <?php echo htmlspecialchars($nome); ?>!</h1>
        <p>Você tem <?php echo htmlspecialchars($idade); ?> anos.</p>
   </section>
</body>
</html>

