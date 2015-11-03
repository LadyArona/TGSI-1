<?php   
    include("conexao.php");
    
    $login = $mysqli->real_escape_string($_POST['usuario']);
    $email = $mysqli->real_escape_string($_POST['email']);
    
    $sql = "SELECT `USU_CODIGO`, `USU_LOGIN`, `USU_NOME`, `USU_EMAIL`, `USU_MATRICULA`
            FROM `usuario`
            WHERE `USU_LOGIN` = '".$login."' 
              AND `USU_EMAIL` = '".$email."'";
    
    $resposta = $mysqli->query($sql);
    
    if (mysqli_num_rows($resposta) > 0){
        include("funcoes.php"); 
        include("config.php");
        
        $resultado = $resposta->fetch_assoc();
        $nome  = $resultado['USU_NOME'];
        $matr  = $resultado['USU_MATRICULA'];
        $codigo = $resultado['USU_CODIGO'];
        // Gera uma senha com 9 carecteres: letras min�sculas e n�meros
        $senha = geraSenha(9, false, true);
        
        $update = "update usuario set usu_senha = '".sha1($senha)."' where usu_codigo = '$codigo' ";
        $mysqli->query($update);        
        
        $emailmsg =
            "<html>
                <body>
                    Ol� ".$nome."!<p>
                    Sua senha foi recuperada com sucesso pelo Gerenciador de TGSI!<br>
                    Matr�cula: ".$matr." <br>
                    Login: ".$login." <br>
                    Nova Senha: ".$senha."<br></p> 
                    <p>Utilize ela pra acessar o sistema e troque por uma senha de sua escolha.</p><br>
                    <p>Para efetuar login acesse: <a href='".$URL_PADRAO."'>Gerenciador TGSI</a></p>

                    <p>---------------------------------------------------------------<br>
                    <em>N�o Responder! Mensagem gerada automaticamente pelo servidor.<br></em></p>
                </body>
            </html>";                
        
        $emailret = smtpmailer($email, 'gerenciador.tgsi@gmail.com', 'naoresponder', '[Gerenciador TGSI] Esqueci minha senha', $emailmsg);        
        
        echo "<script>location.href='../esqueciSenha.php?mensagem1=Opera��o realizada com sucesso!<br>A nova senha foi enviada para o seguinte endere�o: $email <br>A entrega do e-mail com a nova senha pode demorar alguns minutos. Caso n�o o encontre, verifique a caixa de Spam.';</script>";
    } else {        
        echo "<script>location.href='../esqueciSenha.php?mensagem2=Nenhum usu�rio encontrado.';</script>";                
    }
    $mysqli->Close();
    die(); 
?>    
  