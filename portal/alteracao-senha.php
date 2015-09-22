<?php
    include "include/conexao.php";
    include("restrito.php");
    
    //Mude aqui as Menssagens
    $mensagem = "Senha alterada com sucesso."; //Menssagem exibida se a senha for alterada com sucesso
    $mensagem1 = ""; // Mensagem de error caso a senha não foi alterada

    if((!empty($_POST['atual'])) && (!empty($_POST['nova1'])) && (!empty($_POST['nova2']))) {

        $mysqli = $conexao;

        $senha = sha1($mysqli->real_escape_string($_POST['atual']));
        $nova1 = sha1($mysqli->real_escape_string($_POST['nova1']));
        $nova2 = sha1($mysqli->real_escape_string($_POST['nova2']));
        
        unset($_POST['atual']);
        unset($_POST['nova1']);
        unset($_POST['nova2']);
        
        if (!isset($_SESSION['UsuarioCOD'])) {
            header("Location: alterar-senha.php?mensagem=Erro, saia do sistema e faça login novamente.");
            die();
        }else{            
            $codigo = $_SESSION['UsuarioCOD'];
            

            // Validação do usuário/senha digitados
            $sql = "SELECT u.`usu_senha`
                 FROM `usuario` as u  
                 WHERE (u.`usu_codigo` = '". $codigo ."') AND (u.`usu_situacao` = 0)    
                 LIMIT 1"; 

            $query = $mysqli->query($sql);       

            $rows = mysqli_num_rows($query);       
            if ($rows > 0) {
                $resultado = $query->fetch_assoc();
                
                $senhaOld = $resultado['usu_senha'];
                
                if(strcmp($senhaOld,$senha) != 0){
                    header("Location: alterar-senha.php?mensagem=Erro! Senha atual incorreta.");
                    die();
                }elseif(strcmp($nova1,$nova2) != 0){
                     header("Location: alterar-senha.php?mensagem=Erro! Digite novamente a nova senha.");
                     die();                 
                }else{ 
                    $update = "update usuario set usu_senha = '$nova1' where usu_codigo = '$codigo' ";
                    $mysqli->query($update);

                    header("Location: alterar-senha.php?mensagem=Senha alterada com sucesso!");
                }
            }
        }
    }else{
        header("Location: alterar-senha.php?mensagem=Preencha todos os campos.");
    }
?>
 