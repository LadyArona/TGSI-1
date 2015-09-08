<?php
    include("include/config.php");
    // A sessão precisa ser iniciada em cada página diferente
    if (!isset($_SESSION)) {
    session_start();
}

// Verifica se não há a variável da sessão que identifica o usuário
    if (!isset($_SESSION['UsuarioCOD'])) {
        // Destrói a sessão por segurança
        session_destroy();
        // Redireciona o visitante de volta pro login
        header("Location: ".$URL_PADRAO); 
        exit;
    }


