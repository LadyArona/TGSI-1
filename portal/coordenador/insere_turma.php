   <?php
    include("../include/conexao.php");    
    
   
//recebendo os dados do formul�rio
    $ano = trim($_POST['ano']);
    $semestre= trim($_POST['semestre']);
    $descricao = trim($_POST['descricao']);
    $data_proposta  =  trim ($_POST['data_proposta']);
    
        
    $sql = "INSERT INTO turma ('tur_codigo','tur_ano',tur_semestre,'tur_descricao', 'tur_data_proposta')
    VALUES ('".null."',".$ano."','".$semestre."', '$descricao', '$data_proposta');";
//    $query = mysqli_query($sql) or die(mysqli_error());
  $query = $mysqli->query($sql);   
    echo "<script>alert('Turma cadastrada.');</script>";
   
//    $query = mysqli_query($sql);
//
//     if ($query == true) {
//
//            echo "Cadastro efetuado com sucesso!";
//
//        } else {
//            // N�o foi poss�vel fazer o cadastro
//            echo "N�o foi poss�vel cadastrar, tente novamente.";
//        }

    ?>
    
    

    