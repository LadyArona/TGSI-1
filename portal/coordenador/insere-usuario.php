<?php
    include("../include/conexao.php");       
    $mysqli = $conexao;
    
    $login     = $mysqli->real_escape_string($_POST['login']);
    $senha     = $mysqli->real_escape_string($_POST['senha']);
    $matricula = $mysqli->real_escape_string($_POST['matricula']);
    $nome      = $mysqli->real_escape_string($_POST['nome']);
    $email     = $mysqli->real_escape_string($_POST['email']);
    $situacao  = $mysqli->real_escape_string($_POST['situacao']);
    
    foreach ($_POST['categoria'] as $key => $value){
            $categoria[$key] = $value;
    }    
    //$categoria = $mysqli->fetch_array($_POST['categoria']);
    
    $sql = "INSERT INTO `usuario` (`usu_login`, `usu_senha`, `usu_nome`, `usu_email`, `usu_matricula`, `usu_situacao`) 
            VALUES ('$login', '".SHA1($senha)."', '$nome', '$email', '$matricula', '$situacao');";
  
    $mysqli->query($sql);
    //$queryInsert->execute();
    
    $sqlUsu = "SELECT `usu_codigo`
             FROM `usuario`  
             WHERE (`usu_login` = '". $login ."') AND (`usu_senha` = '". SHA1($senha) ."')    
             LIMIT 1";
    $queryUsu = $mysqli->query($sqlUsu);    
    
    if (mysqli_num_rows($queryUsu) > 0) { 
        if (!empty($categoria)) {
            $N = count($categoria);
            $resultado = $queryUsu->fetch_assoc();
            for($i=0; $i < $N; $i++)
            {
                $sqlCategoria = "INSERT INTO `usuario_categoria` (`usu_codigo`, `cat_codigo`) VALUES ('". $resultado['usu_codigo'] ."', '". $categoria[$i] ."')";
                $mysqli->query($sqlCategoria);
            }
        }
    }  

    include("../include/funcoes.php");
    
    $emailmsg = montaMensagem($login, $senha); 
    
    $emailret = smtpmailer($email, 'gerenciador.tgsi@gmail.com', $nome, 'Cadastro Gerenciador TGSI', $emailmsg);
    
    header("Location: cadastrar.php?mensagem=Usuário inserido com sucesso! $emailret");
    die();
?>
