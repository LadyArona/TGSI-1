<?php
	include ("conexao.php");        

        // Verifica se houve POST e se o usu�rio ou a senha �(s�o) vazio(s)
        if (!empty($_POST) AND (empty($_POST['j_username']) OR empty($_POST['j_password']))) {
            header("Location: index.php"); 
            exit;
        }
        
        $login = mysql_real_escape_string($_POST['j_username']);
        $senha = mysql_real_escape_string($_POST['j_password']);
	
        // Valida��o do usu�rio/senha digitados
        $sql = "SELECT `USU_CODIGO`, `USU_NOME`
                FROM `USUARIO`  
                WHERE (`USU_LOGIN` = '". $login ."') AND (`USU_SENHA` = '". sha1($senha) ."') AND (`USU_SITUACAO` = 0)    
                LIMIT 1";        
        
        $query = mysql_query($sql);
        
        if (mysql_num_rows($query) != 1) {
            // Mensagem de erro quando os dados s�o inv�lidos e/ou o usu�rio n�o foi encontrado
            echo "Login inv�lido!";
            exit;
        } else {
            // Salva os dados encontados na vari�vel $resultado
            $resultado = mysql_fetch_assoc($query);
            
            // Se a sess�o n�o existir, inicia uma
            if (!isset($_SESSION)) session_start();            
            // Salva os dados encontrados na sess�o
            $_SESSION['UsuarioCOD'] = $resultado['USU_CODIGO'];
            $_SESSION['UsuarioNome'] = $resultado['USU_NOME'];
                        
            $sql2 = "SELECT `CAT_CODIGO` FROM `USUARIO_CATEGORIA` WHERE (`USU_CODIGO` = '". $resultado['USU_CODIGO'] ."')";
            $resposta = mysql_query($sql2);
            
            if (mysql_num_rows($resposta) < 1) {
                // Mensagem de erro quando os dados s�o inv�lidos e/ou o usu�rio n�o foi encontrado
                echo "Login inv�lido!"; 
                exit;
            }
            
            if (mysql_num_rows($resposta) == 1){
                $registro = mysql_fetch_assoc($resposta);
                switch ($registro['CAT_CODIGO']) {
                    case 1: header("Location: coordenador"); exit; break;
                    case 2: header("Location: orientador"); exit; break;
                    case 3: header("Location: avaliador"); exit; break;
                    case 4: header("Location: aluno"); exit; break;
                }
            } else {
                header("Location: escolher-visualizacao.php");
                exit;
            }          
        }
?>


