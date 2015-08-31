<?php
    include("restrito.php");    
    include("conexao.php");
    
    $codigo = $_POST['categoria'];
    switch ($codigo) {
        case 1: header("Location: coordenador"); exit; break;
        case 2: header("Location: orientador"); exit; break;
        case 3: header("Location: avaliador"); exit; break;
        case 4: header("Location: aluno"); exit; break;
    }
?>

