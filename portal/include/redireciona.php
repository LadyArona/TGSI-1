<?php    
    $codigo = $_POST['categoria'];
    switch ($codigo) {
        case 1: header("Location: ../coordenador/index.php"); exit; break;
        case 2: header("Location: ../orientador/index.php"); exit; break;
        case 3: header("Location: ../avaliador/index.php"); exit; break;
        case 4: header("Location: ../aluno/index.php"); exit; break;
    }
?>
