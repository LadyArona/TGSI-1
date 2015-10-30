   <?php
    include("../include/conexao.php"); 
        //as variaveis recebem os dados do formulário
       $ano            = $mysqli->real_escape_string($_POST['ano']); 
       $semestre       = $mysqli->real_escape_string($_POST['semestre']);
       $descricao      = $mysqli->real_escape_string($_POST['descricao']);
       $data_proposta  = $mysqli->real_escape_string ($_POST['data_proposta']);
       $codigo = $mysqli->real_escape_string ($_POST['data_proposta']);
    
    //Se o códio estiver vazio faz op insert 
        //passa os volores
        $sql = "INSERT INTO `turma` (`tur_ano`, `tur_semestre`, `tur_descricao`, `tur_data_proposta`)
         VALUES ('$ano','$semestre','$descricao', '$data_proposta');";
        //executa
        $res = $mysqli->query($sql)or die ("Não foi possivel salvar os dados, verifique os valores passados");
        
        if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
        }  
        
        if (mysqli_connect_errno()) {
        printf("Falha ao se conectar: %s\n", mysqli_connect_error());
        exit();
        }
        header("Location: turma.php?mensagem=A turma foi inserida com sucesso! ");     
        die();
        
    //Se não, se o códio tiver valor, faz um UPDATE where codigo = $codigo;
        
        
            
      ?>     