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
        
    //testar se já teve avaliação  naquela banca, se sim não habilita o botão editar --usar busca dados
    //não deixar cadastrar + de um tipo igual exemplo proposta de banca, só cadastra uma vez
                 
    //testar se ja foi feito + de uma banca para aquele aluno com o mesmo tipo
        //Exemplo se o aluno ja tem uma banca com tipo = 
       //select usu_codigo, ban_tipo from banca where usu_codigo = 1 and ban_tipo = 1;

        $query = "SELECT usu_codigo, ban_tipo
                    FROM banca 
                        WHERE usu_codigo = '$aluno' and ban_tipo = '$tipo'";
        
         $queryTesta = $mysqli->query($query); 
         
        if(mysqli_num_rows($queryTesta) > 0){
            echo "<script>location.href='banca.php?mensagem=error&texto=A Banca do aluno $nome do tipo de avaliação informado já existe!';</script>";
            die();
        }       

        $sqlBanca = "INSERT INTO `banca` (`ban_tipo`, `ban_data`, `ban_descricao`, `ban_local`, `usu_codigo`, `tur_codigo`, `ban_hora`) VALUES ('$tipo', '$data', '$descricao', '$local', '$aluno', '$turma', '$hora');";
        $mysqli->query($sqlBanca);
     
        $idBanca = $mysqli->insert_id;
          
        $sqlBancaDetalheOrientadorAvaliador1 = "INSERT INTO `banca_detalhe` (`ban_codigo`, `usu_codigo`)
                                                                     VALUES ('$idBanca','$orientadorAvaliador1_codigo');";
        $mysqli->query($sqlBancaDetalheOrientadorAvaliador1);
         

        $sqlBancaDetalheAvaliador2 = "INSERT INTO `banca_detalhe` (`ban_codigo`, `usu_codigo`)
                                                           VALUES ('$idBanca','$avaliador2_codigo');";
        $mysqli->query($sqlBancaDetalheAvaliador2);
        
        $sqlBancaDetalheAvaliador3 = "INSERT INTO `banca_detalhe` (`ban_codigo`, `usu_codigo`)
                                                           VALUES ('$idBanca','$avaliador3_codigo');";
        $mysqli->query($sqlBancaDetalheAvaliador3);
        
     
        echo "<script>location.href='banca.php?mensagem=error&texto=A Banca do aluno $nome do tipo de avaliação informado foi cadastrada com sucesso!';</script>";

        $mysqli->Close();
        die();        
              
//?>
