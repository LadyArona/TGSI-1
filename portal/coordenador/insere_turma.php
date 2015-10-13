   <?php
    include("../include/conexao.php"); 
    
       $ano            = $mysqli->real_escape_string($_POST['ano']); 
       $semestre       = $mysqli->real_escape_string($_POST['semestre']);
       $descricao      = $mysqli->real_escape_string($_POST['descricao']);
       $data_proposta  = $mysqli->real_escape_string ($_POST['data_proposta']);
    
        
//    if ($mysqli->connect_error) {
//        die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
//    }    
//  
//    if (mysqli_connect_errno()) {
//    printf("Connect failed: %s\n", mysqli_connect_error());
//    exit();
//    }
//
//    if (!$mysqli->query("SET a=1")) {
//    printf("Errormessage: %s\n", $mysqli->error);
//    }


    //colocando a consulta dentro da variável sql
    $sql = "INSERT INTO `turma` (`tur_ano`, `tur_semestre`, `tur_descricao`, `tur_data_proposta`)
     VALUES ('$ano','$semestre','$descricao', '$data_proposta');";
    
    $res = $mysqli->query($sql);

        if (!$res) {
           printf("Errormessage: %s\n", $mysqli->error);
        }
        else
              echo "Seu cadastro foi realizado com sucesso!";

    ?>
    
    

  
    
