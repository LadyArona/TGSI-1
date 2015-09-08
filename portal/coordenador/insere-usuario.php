<?php
    include("../conexao.php");    
    include("../restrito.php");        

    $login     = $_POST['login'];
    $senha     = $_POST['senha'];
    $matricula = $_POST['matricula'];
    $nome      = $_POST['nome'];
    $email     = $_POST['email'];
    $situacao  = $_POST['situacao'];
    $categoria = $_POST['categoria'];
    
    $sql = "INSERT INTO `usuario` (`USU_LOGIN`, `USU_SENHA`, `USU_NOME`, `USU_EMAIL`, `USU_MATRICULA`, `USU_SITUACAO`) 
            VALUES ('$login', '".SHA1($senha)."', '$nome', '$email', '$matricula', '$situacao');";
    mysql_query($sql) or die (mysql_error());
    
    $sqlUsu = "SELECT `USU_CODIGO`
             FROM `USUARIO`  
             WHERE (`USU_LOGIN` = '". $login ."') AND (`USU_SENHA` = '". SHA1($senha) ."')    
             LIMIT 1";
    $queryUsu = mysql_query($sqlUsu);    
    
    if (mysql_num_rows($queryUsu) > 0) { 
        if (!empty($categoria)) {
            $N = count($categoria);
            $resultado = mysql_fetch_assoc($queryUsu);
            for($i=0; $i < $N; $i++)
            {
                $sqlCategoria = "INSERT INTO `usuario_categoria` (`USU_CODIGO`, `CAT_CODIGO`) VALUES ('". $resultado['USU_CODIGO'] ."', '". $categoria[$i] ."')";
                mysql_query($sqlCategoria) or die (mysql_error());
            }
        }
    }  

    include("../funcoes.php");
    
    $emailmsg = montaMensagem($login, $senha); 
    
    $emailret = smtpmailer($email, 'gerenciador.tgsi@gmail.com', $nome, 'Cadastro Gerenciador TGSI', $emailmsg);
    
    header("Location: cadastrar.php?mensagem=Usuário inserido com sucesso!");
    die();
?>
