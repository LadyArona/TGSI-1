<?php
    include("../include/conexao.php");    
    include("../restrito.php");        
    $mysqli = $conexao;
    
    $login     = $mysqli->real_escape_string($_POST['login']);
    $senha     = $mysqli->real_escape_string($_POST['senha']);
    $matricula = $mysqli->real_escape_string($_POST['matricula']);
    $nome      = $mysqli->real_escape_string($_POST['nome']);
    $email     = $mysqli->real_escape_string($_POST['email']);
    $situacao  = $mysqli->real_escape_string($_POST['situacao']);
    $categoria = $mysqli->fetch_array($_POST['categoria']);
    
    $sql = "INSERT INTO `usuario` (`USU_LOGIN`, `USU_SENHA`, `USU_NOME`, `USU_EMAIL`, `USU_MATRICULA`, `USU_SITUACAO`) 
            VALUES ('$login', '".SHA1($senha)."', '$nome', '$email', '$matricula', '$situacao');";
  
    $queryInsert = $mysqli->query($sql);
    $queryInsert->execute();
    
    $sqlUsu = "SELECT `USU_CODIGO`
             FROM `USUARIO`  
             WHERE (`USU_LOGIN` = '". $login ."') AND (`USU_SENHA` = '". SHA1($senha) ."')    
             LIMIT 1";
    $queryUsu = $mysqli->query($sqlUsu);    
    
    if (mysqli_num_rows($queryUsu) > 0) { 
        if (!empty($categoria)) {
            $N = count($categoria);
            $resultado = $queryUsu->fetch_assoc();
            for($i=0; $i < $N; $i++)
            {
                $sqlCategoria = "INSERT INTO `usuario_categoria` (`USU_CODIGO`, `CAT_CODIGO`) VALUES ('". $resultado['USU_CODIGO'] ."', '". $categoria[$i] ."')";
                $queryCategoria = $mysqli->query($sqlCategoria);
                $queryCategoria->execute();
            }
        }
    }  

    include("../funcoes.php");
    
    $emailmsg = montaMensagem($login, $senha); 
    
    $emailret = smtpmailer($email, 'gerenciador.tgsi@gmail.com', $nome, 'Cadastro Gerenciador TGSI', $emailmsg);
    
    header("Location: cadastrar.php?mensagem=Usuário inserido com sucesso!");
    die();
?>
