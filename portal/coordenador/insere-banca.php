<?php  
        include("../include/conexao.php");
        
        //as variaveis recebem os dados do formulário
        $ano             = $mysqli->real_escape_string($_POST['ano']); 
        $semestre        = $mysqli->real_escape_string($_POST['semestre']);
        $aluno           = $mysqli->real_escape_string($_POST['aluno']);
        $tipo            = $mysqli->real_escape_string($_POST['tipo']);
        $data            = $mysqli->real_escape_string($_POST['data']);
        $descricao       = $mysqli->real_escape_string($_POST['descricao']);   
        $local           = $mysqli->real_escape_string($_POST['local']);
        
//       
//?>     