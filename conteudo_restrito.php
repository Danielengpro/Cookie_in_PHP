<?php
// verifica se o usuario esta autenticado
if (!isset($_COOKIE['autenticado']) || $_COOKIE['autenticado'] !== 'true') {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Conteúdo restrito</title>
</head>

<body>
    <h1>Conteúdo restrito</h1>
    <p>Este é o conteúdo restrito para acesso apenas de usuário autenticados.</p>
    <p><a href="login.php">Sair</a> </p>
</body>

</html>