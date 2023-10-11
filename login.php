<?php
// verifica se o formulário de login foi enviado
if (isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    //verifica se o usuario e a senha corresponde(lógica de autenticação real)

    if ($usuario === 'daniel' && $senha === 'ola123') {
        //autenticação bem sucecida cria um cookie de autenticação
        setcookie('autenticado', 'true', time() + 3600);
        header('Location: conteudo_restrito.php');
        exit;
    } else {
        $mensagem_erro = "Credenciais inválidas. Tente novamente";
    }
}
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Página de login</title>
</head>

<body>
    <h1>Página de login</h1>
    <?php if (isset($mensagem_erro)) { ?>
        <p><?php echo $mensagem_erro; ?> </p>
    <?php } ?>
    <form method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuartio">
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">
        <br>
        <input type="submit" name="login" value="login">
    </form>
</body>

</html>