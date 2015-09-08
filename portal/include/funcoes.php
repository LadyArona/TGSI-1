<?php
    function smtpmailer($para, $de, $de_nome, $assunto, $corpo){
        require_once ("../phpmailer/class.phpmailer.php");
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->IsHTML(true);
        $mail->SMTPDebug = 1;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->Username = 'gerenciador.tgsi@gmail.com';
        $mail->Password = 'testegerenciador';
        $mail->SetFrom($de, $de_nome);
        $mail->Subject = $assunto;
        $mail->Body = $corpo;
        $mail->AddAddress($para);
        
        if(!$mail->Send()){
            $erro = 'Erro: '.$mail->ErrorInfo;
            return $erro;
        }else{
            return 'Mensagem enviada!';
        }
    }
    
    function montaMensagem ($login,$senha){
        include ("config.php");
       $mensagem = 
       "<html>
            <body>
                Olá!<p>
                Você foi cadastrado do Gerenciador de TGSI!<br>
                Nome completo: ".$login." <br>
                Senha: ".$senha."<br></p> 
                <p>Para efetuar login acesse: <a href='http://www.dallconsistemas.com.br/tgsi'>Gerenciador TGSI</a></p>
                
                <p>---------------------------------------------------------------<br>
                <em>Não Responder! Mensagem gerada automaticamente pelo servidor.<br></em></p>
            </body>
        </html>";
       
       return $mensagem;
    }
?>

