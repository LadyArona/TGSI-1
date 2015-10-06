<?php
	include "include/conexao.php";
        include "restrito.php";

    // Verifica se houve POST e se o ano ou semestre é(são) vazio(s)
    if (!empty($_POST) AND (empty($_POST['tur_ano']) OR empty($_POST['tur_semestre']))) {
        header("Location: turma_seg.php"); 
        exit;
    }

    $busca_turma = $mysqli->real_escape_string($_POST["tur_ano"]);
    $busca_turma = $mysqli->real_escape_string($_POST["tur_semestre"]);

      // Validação do ano e semestre digitados
    $sql = "SELECT t.`tur_ano`, t.`tur_semestre`
            FROM `turma` as t  
            WHERE (t.`tur_ano` = '". $busca_turma."') AND (t.`tur_semestre` = ('".$busca_turma."')) 
            LIMIT 1"; 
        
    $query = $mysqli->query($sql);       
        
    $rows = mysqli_num_rows($query);       
        if ($rows != 1) {
                // Mensagem quando turma não encontrada
                header("Location: turma_seg.php?mensagem=Turma ainda não cadastrada!");
                exit;  
        }
    ?>

