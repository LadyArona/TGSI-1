   <?php
    include("../include/conexao.php"); 
    
       $ano            = $mysqli->real_escape_string($_POST['ano']); 
       $semestre       = $mysqli->real_escape_string($_POST['semestre']);
       $descricao      = $mysqli->real_escape_string($_POST['descricao']);
       $data_proposta  = $mysqli->real_escape_string ($_POST['data_proposta']);
    

       $search = mysql_query("SELECT * FROM turma WHERE ano = '$ano' AND semestre = '$semestre'");
            if(mysqli_num_rows($search) > 0){
            echo 'Essa turma já existe';
            }else{  
                
            }
//        
//        //executa 
        $sql = "INSERT INTO `turma` (`tur_ano`, `tur_semestre`, `tur_descricao`, `tur_data_proposta`)
         VALUES ('$ano','$semestre','$descricao', '$data_proposta');";

        $res = $mysqli->query($sql);
        

        if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
        }  
        
        if (mysqli_connect_errno()) {
        printf("Falha ao se conectar: %s\n", mysqli_connect_error());
        exit();
}
        header("Location: turma.php?mensagem=A turma ano $ano do $semestre º semestre foi inserida com sucesso! ");     
        die();    
//}
      ?>     