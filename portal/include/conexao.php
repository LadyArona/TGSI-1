<?php
    $servidor_mysql = "127.0.0.1";
    $login_mysql = "root";
    $senha_mysql = "";
    $base_mysql = "gerenciador";

    /*Estou usando o servidor WAMPSERVER */
/*    $conexao = mysqli_connect($servidor_mysql, $login_mysql, $senha_mysql,$base_mysql);
    if (!$conexao) {
        die('Nao foi possivel conectar devido ao erro a seguir: ' . mysql_error());
    }
    //mysqli_select_db($base_mysql) or die(mysqli_error());
 * */
    
    $mysqli = new mysqli($servidor_mysql, $login_mysql, $senha_mysql,$base_mysql);
    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }    
?>