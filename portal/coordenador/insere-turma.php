   <?php
    include("../include/conexao.php"); 
    
       $ano            = $mysqli->real_escape_string($_POST['ano']); 
       $semestre       = $mysqli->real_escape_string($_POST['semestre']);
       $descricao      = $mysqli->real_escape_string($_POST['descricao']);
       $data_proposta  = $mysqli->real_escape_string ($_POST['data_proposta']);
    
       
            $search = mysql_query("SELECT * FROM tabela3 WHERE ano = '$ano' AND semestre = '$semestre'");
            if(@mysqli_num_rows($search) > 0){
            echo 'Esse post já existe';
            }else{   
  
            //colocando a consulta dentro da variável sql
            $sql = "INSERT INTO `turma` (`tur_ano`, `tur_semestre`, `tur_descricao`, `tur_data_proposta`)
             VALUES ('$ano','$semestre','$descricao', '$data_proposta');";

            $res = $mysqli->query($sql);
            }

                if ($mysqli->connect_error) {
                    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
                }    

                if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
                }

            else{
                header("Location: turma.php?mensagem=A turma ano $ano e $semestre semestre foi inserida com sucesso! "); 
            }
                die();    

          ?>     