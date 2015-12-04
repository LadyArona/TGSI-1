<?php  
        include("../include/conexao.php");
  
        //as variaveis recebem os dados do formulário e campos hidden
        $data                        = $mysqli->real_escape_string($_POST['data']); 
        $descricao                   = $mysqli->real_escape_string($_POST['descricao']);
        $hora                        = $mysqli->real_escape_string($_POST['hora']);
        $local                       = $mysqli->real_escape_string($_POST['local']);
        $tipo                        = $mysqli->real_escape_string($_POST['tipo']);
        $turma                       = $mysqli->real_escape_string($_POST['turma']);
        $aluno                       = $mysqli->real_escape_string($_POST['aluno']);
        $orientadorAvaliador1_codigo = $mysqli->real_escape_string($_POST['orientador']);
        $avaliador2_codigo           = $mysqli->real_escape_string($_POST['avaliador2']);
        $avaliador3_codigo           = $mysqli->real_escape_string($_POST['avaliador3']);
                
     //Falta testar se ja existe aquela banca--
        $sqlBanca = "INSERT INTO `banca` (`ban_tipo`, `ban_data`, `ban_descricao`, `ban_local`, `usu_codigo`, `tur_codigo`, `ban_hora`) VALUES ('$tipo', '$data', '$descricao', '$local', '$aluno', '$turma', '$hora');";
        $mysqli->query($sqlBanca);
         
        $idBanca = $mysqli->insert_id;
          
        $sqlBancaDetalheAluno = "INSERT INTO `banca_detalhe` (`ban_codigo`, `usu_codigo`) VALUES ('$idBanca','$aluno');";  
        $mysqli->query($sqlBancaDetalheAluno);

        $sqlBancaDetalheOrientadorAvaliador1 = "INSERT INTO `banca_detalhe` (`ban_codigo`, `usu_codigo`) VALUES ('$idBanca','$orientadorAvaliador1_codigo');";
        $mysqli->query($sqlBancaDetalheOrientadorAvaliador1);

        $sqlBancaDetalheAvaliador2 = "INSERT INTO `banca_detalhe` (`ban_codigo`, `usu_codigo`) VALUES ('$idBanca','$avaliador2_codigo');";
        $mysqli->query($sqlBancaDetalheAvaliador2);
        
        $sqlBancaDetalheAvaliador3 = "INSERT INTO `banca_detalhe` (`ban_codigo`, `usu_codigo`) VALUES ('$idBanca','$avaliador3_codigo');";

    $mysqli->Close();
    
    die();        
              
//?>
