<?php  
        include("../include/conexao.php");
        include("../include/funcoes.php");
  
        //as variaveis recebem os dados do formulário e campos hidden
        $nome                         = $mysqli->real_escape_string($_POST['nome']); 
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
        
        //seleciona as o aluno e tipo de avaliação na banca 
        $query = "SELECT usu_codigo, ban_tipo
                    FROM banca 
                        WHERE usu_codigo = '$aluno' and ban_tipo = '$tipo'";
       //executa a query
         $queryTesta = $mysqli->query($query); 
       //verifica se há registro, se sim não permite que insira no banco
        if(mysqli_num_rows($queryTesta) > 0){
            echo "<script>location.href='banca.php?mensagem=error&texto=A Banca do aluno $nome do tipo de avaliação informado já existe!';</script>";
            die();
        }
        //código para inserir a banca
        $sqlBanca = "INSERT INTO `banca` (`ban_tipo`, `ban_data`, `ban_descricao`, `ban_local`, `usu_codigo`, `tur_codigo`, `ban_hora`) VALUES ('$tipo', '$data', '$descricao', '$local', '$aluno', '$turma', '$hora');";
        //executa a query
        $mysqli->query($sqlBanca);
        //pega o código da banca inserido por último
        $idBanca = $mysqli->insert_id;
        //insere orientador avaliador 1
        $sqlBancaDetalheOrientadorAvaliador1 = "INSERT INTO `banca_detalhe` (`ban_codigo`, `usu_codigo`)
                                                                     VALUES ('$idBanca','$orientadorAvaliador1_codigo');";
      
        $mysqli->query($sqlBancaDetalheOrientadorAvaliador1);
         //insere avaliador 2
        $sqlBancaDetalheAvaliador2 = "INSERT INTO `banca_detalhe` (`ban_codigo`, `usu_codigo`)
                                                           VALUES ('$idBanca','$avaliador2_codigo');";
        $mysqli->query($sqlBancaDetalheAvaliador2);
        
          //insere avaliador 3
        $sqlBancaDetalheAvaliador3 = "INSERT INTO `banca_detalhe` (`ban_codigo`, `usu_codigo`)
                                                           VALUES ('$idBanca','$avaliador3_codigo');";
        $mysqli->query($sqlBancaDetalheAvaliador3);
        
        echo "<script>location.href='banca.php?mensagem=error&texto=A Banca do aluno $nome do tipo de avaliação informado foi cadastrada com sucesso!';</script>";

        $mysqli->Close();
        die();        
   
//?>
