   <?php
    include("../include/conexao.php"); 
//    include("../include/funcoes.php");
    
     if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
     
   //pegando os dados do formul�rio e inserindo na vari�vel do php -- Trim � para tirar os espa�os em branco no inicio e fim de frase
   $ano = trim($_POST['ano']); 
   $semestre= trim($_POST['semestre']);
   $descricao = trim($_POST['descricao']);
   $data_proposta  =  trim ($_POST['data_proposta']);
   
    //colocando a consulta dentro da vari�vel sql
    $sql = "INSERT INTO `turma` (`tur_ano`, `tur_semestre`, `tur_descricao`, `tur_data_proposta`)
     VALUES ($ano','$semestre','$descricao', '$data_proposta');";

    if (!$mysqli->query("SET a=1")) {
        printf("Errormessage: %s\n", $mysqli->error);
    }
     
    if (!mysqli_query($mysqli, "SET a=1")) {
    printf("Errormessage: %s\n", mysqli_error($mysqli));
}
else{
   $mysqli->query($sql);
   echo "Seu cadastro foi realizado com sucesso!<br>";
}
     echo $ano,$semestre,$descricao,$data_proposta;
      die();
      
/* fecha conex�o */
      $mysqli->close();
?>
     
