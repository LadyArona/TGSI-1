<?php  
        include("../include/conexao.php");
        //receber o codigo do aluno e codigo da turma
       
        //as variaveis recebem os dados do formulário
        $data            = $mysqli->real_escape_string($_POST['data']); 
        $descricao       = $mysqli->real_escape_string($_POST['descricao']);
        $hora            = $mysqli->real_escape_string($_POST['hora']);
        $local           = $mysqli->real_escape_string($_POST['local']);
        $tipo            = $mysqli->real_escape_string($_POST['tipo']);
        $turmaCodigo     = $mysqli->real_escape_string($_POST['Turmacodigo']);
        $usuarioCodigo   = $mysqli->real_escape_string($_POST['UsuarioCodigo']);
 
        if (($anoInicial != $ano) || ($semestreInicial != $semestre)) {
        $query = "SELECT tur_codigo, tur_ano, tur_semestre  from turma where tur_ano = '$ano' and tur_semestre = '$semestre'";
        /*retorna a quantidade registros encontrados na consulta acima */
        $queryTurma = $mysqli->query($query);        
        //se existe turma com ano e semestre iguais então a turma ja existe
        if(mysqli_num_rows($queryTurma) > 0){
            echo "<script>location.href='turma.php?mensagem=error&texto=A turma do ano $ano / $semestre º semestre já existe!';</script>";
            die();
        }       
    } 

//    if (($codigo >= 0)  && ($codigo != '')) {
//        $sql = "UPDATE `turma`
//                SET `tur_ano`='$ano',`tur_semestre`='$semestre',`tur_descricao`='$descricao',`tur_data_proposta`='$data_proposta'
//                WHERE `tur_codigo`= '$codigo'"; 
//    } else {
        $sql = "INSERT INTO `banca` (`ban_tipo`, `ban_data`, `ban_descricao`, `ban_local`, `usu_codigo`, `tur_codigo`, `ban_hora`) VALUES ('$tipo', '$data', '$descricao', '$local', '$codigoAluno', '$codigoTurma', '$data');";

//    }

    //echo "<script>location.href='turma.php?mensagem=success&texto=A turma foi inserida/alterada com sucesso!';</script>";

    $mysqli->query($sql);
    
    session_start();
    if (($codigo >= 0)  && ($codigo != '')) {           
        $_SESSION['CodigoBanca'] = $codigo;
    } else {
        $_SESSION['CodigoBanca'] = $mysqli->insert_id;
    }       
    echo "<script>location.href='turma-aluno.php?Turma=$descricao';</script>";
    $mysqli->Close();
    die();        
    //Se não, se o código tiver valor, faz um UPDATE where codigo = $codigo;            
?> 