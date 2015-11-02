<?php
    include("include/config.php");
    // A sess�o precisa ser iniciada em cada p�gina diferente
    if (!isset($_SESSION)) session_start();
       
    // Verifica se n�o h� a vari�vel da sess�o que identifica o usu�rio
    if (!isset($_SESSION['UsuarioCOD'])) {
        // Destr�i a sess�o por seguran�a
        session_destroy();
        //echo 'Sess�o terminada';
        // Redireciona o visitante de volta pro login
        header("Location: ".$URL_PADRAO); 
        exit();  
    }
    
    if (isset($_SESSION['categoriaPagina']) && isset($_SESSION['categoriaUsuario'])) {
        if ($_SESSION['categoriaPagina'] != $_SESSION['categoriaUsuario']) {
            $codigoCat = $_SESSION['categoriaUsuario'];
            switch ($codigoCat) {
                case 1: header("Location: ../coordenador"); exit; break; 
                case 2: header("Location: ../orientador"); exit; break; 
                case 3: header("Location: ../avaliador"); exit; break;
                case 4: header("Location: ../aluno"); exit; break;    
            }
        }
    }
