<?php

 include("../include/conexao.php");  
 
    $ano            = $mysqli->real_escape_string($_POST['ano']); 
    $semestre       = $mysqli->real_escape_string($_POST['semestre']);
           
    $sql = mysql_query("SELECT * FROM turma WHERE tur_ano='$ano' AND tur_semestre='$semestre'");
    $res = $mysqli->query($sql)or die ("Não foi possivel salvar os dados, verifique os valores passados");
  
//   if (mysqli_num_rows($queryUsu) > 0) { 
//        if (!empty($categoria)) {
//            $N = count($categoria);
//            $resultado = $queryUsu->fetch_assoc();
//            for($i=0; $i < $N; $i++)
//            {
//                $sqlCategoria = "INSERT INTO `usuario_categoria` (`usu_codigo`, `cat_codigo`) VALUES ('". $resultado['usu_codigo'] ."', '". $categoria[$i] ."')";
//                $mysqli->query($sqlCategoria);
//            }
//        }  
    
    
        while ($turma = mysqli_affected_rows($query)) {
          // Exibe um link com a notícia
          echo '['. $turma['ano'] .']('. $turma['semestre'] .')';
          echo '';
        } // fim while
// Total de notícias
echo 'Cadastro: ' . mysqli_num_rows($query);

////    $query = $mysqli->query($sql);
//    while ($res = $query->mysqli_fetch_array()){
//      echo 'Ano: ' . $res['tur_ano'] . '';
//      echo 'Semestre: ' . $res['tur_semestre'] . '';
//    }
//    echo 'Registros encontrados:' . $query->num_rows;

 
//    $sql = "DELETE FROM `turma` WHERE `tur_ano` = 2019";
//    $query = $mysqli->query($sql);
//    echo 'Registros afetados: ' . $query->affected_rows;

       
//        $sql = "SELECT * FROM turma WHERE tur_ano='$ano' AND tur_semestre='$semestre'";
//        $rs = mysqli_fetch_assoc ($sql);
//        // verificar se existem...
//        $ver = mysqli_num_rows ($sql);
//        if( $ver <=0 )
//        {
//        echo"Inválido";
//        }else{
//        echo"Válido";
//
//        }  
//    $sql = "SELECT `ano`, `semestre` FROM `turma` where ano= 5";
//    $query = $mysqli->query($sql);
//    while ($dados = $query->mysqli_fetch_array()) {
//      echo 'ID: ' . $dados['ano'] . '';
//      echo 'Título: ' . $dados['semestre'] . '';
//    }
//    echo 'Registros encontrados: ' . $query->num_rows;
        