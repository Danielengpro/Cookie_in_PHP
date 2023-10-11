<?php
//expira o cookie de autenticação
setcookie('autenticado', '', time() - 3600);
// define a data de validade no passado para remover o cookie
header("Locatin: login.php");
exit;
