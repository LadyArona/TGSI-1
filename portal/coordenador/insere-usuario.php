<?php
    include("../conexao.php");    
    include("../restrito.php");        

    $login     = $_POST['login'];
    $senha     = $_POST['senha'];
    $matricula = $_POST['matricula'];
    $nome      = $_POST['nome'];
    $email     = $_POST['email'];
    $situacao  = $_POST['situacao '];
    $categoria = $_POST['categoria'];

    $sql = "INSERT INTO `gerenciador`.`usuario` (`USU_LOGIN`, `USU_SENHA`, `USU_NOME`, `USU_EMAIL`, `USU_MATRICULA`, `USU_SITUACAO`) 
            VALUES ('$login', '".SHA1($senha)."', '$nome', '$email', '$matricula', '$situacao');";
    mysql_query($sql) or die (mysql_error());

    header("Location: cadastrar.php?mensagem=Usuário inserido com sucesso!");
    die();
?>
