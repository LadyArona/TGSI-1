<?php
    include("restrito.php");    
    include("conexao.php");
    
    $codigo = $_POST['categoria'];
    switch ($codigo) {
        case 1: header("Location: coordenador"); exit; break; //ele faz uma busca no Sql
        case 2: header("Location: orientador"); exit; break; // busca se a pessoa só tem uma categoria
        case 3: header("Location: avaliador"); exit; break;
        case 4: header("Location: aluno"); exit; break;
    }


