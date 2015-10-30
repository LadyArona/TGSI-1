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
                Login: ".$login." <br>
                Senha: ".$senha."<br></p> 
                <p>Para efetuar login acesse: <a href='".$URL_PADRAO."'>Gerenciador TGSI</a></p>
                
                <p>---------------------------------------------------------------<br>
                <em>Não Responder! Mensagem gerada automaticamente pelo servidor.<br></em></p>
            </body>
        </html>";
       
       return $mensagem;
    }
    
    function pegaTurma($idAluno){
        include("conexao.php");       
        
        $sql = "SELECT `tur_codigo` 
                FROM `turma_detalhe` 
                WHERE `usu_aluno` = $idAluno 
                LIMIT 1";
           
        $query = $mysqli->query($sql);    
        $resposta = $query->fetch_assoc();
        if (mysqli_num_rows($query) > 0) {        
            return $resposta['tur_codigo'];
        }
    }

    function pegaOrientador($idAluno){
        include("conexao.php");       
        
        $sql = "SELECT `usu_orientador` 
                FROM `turma_detalhe` 
                WHERE `usu_aluno` = $idAluno 
                LIMIT 1";
           
        $query = $mysqli->query($sql);    
        $resposta = $query->fetch_assoc();
        if (mysqli_num_rows($query) > 0) {        
            return $resposta['usu_orientador'];
        }
    }  
    
function geraSenha($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false)
{
    // Caracteres de cada tipo
    $lmin = 'abcdefghijklmnopqrstuvwxyz';
    $lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $num = '1234567890';
    $simb = '!@#$%*-';
    
    // Variáveis internas
    $retorno = '';
    $caracteres = '';
    
    // Agrupamos todos os caracteres que poderão ser utilizados
    $caracteres .= $lmin;
    if ($maiusculas) $caracteres .= $lmai;
    if ($numeros) $caracteres .= $num;
    if ($simbolos) $caracteres .= $simb;
    
    // Calculamos o total de caracteres possíveis
    $len = strlen($caracteres);
    
    for ($n = 1; $n <= $tamanho; $n++) {
        // Criamos um número aleatório de 1 até $len para pegar um dos caracteres
        $rand = mt_rand(1, $len);
        // Concatenamos um dos caracteres na variável $retorno
        $retorno .= $caracteres[$rand-1];
    }
    
    return $retorno;
}    

