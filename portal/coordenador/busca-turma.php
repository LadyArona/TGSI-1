<?php

 include("../include/conexao.php");  
 
    $ano            = $mysqli->real_escape_string($_POST['ano']); /*pegando os valores do formulario*/
    $semestre       = $mysqli->real_escape_string($_POST['semestre']);

    /*pega no banco de dados da turma */
    $query = mysqli_query($conexao,"SELECT  tur_ano ,tur_semestre,tur_descricao, tur_data_proposta from turma where tur_ano = '$ano' and tur_semestre = '$semestre'")or die(mysql_error());
    /*retorna a quantidade registros encontrados na consulta acima */
    $numrow = mysqli_num_rows($query);
    /*se quantidade de linhas maior que zero*/
        if($numrow > 0)
        {
         /*Retorna uma matriz que corresponde a linha obtida e move o ponteiro interno dos dados adiante */
         while($row=mysqli_fetch_array($query))
         {
            /*se ele encontrar linha com ano digitado igual a ano inserido e semestre digitado igual a semestre inserido a turma ja existe! */
            if($row['tur_ano'] == $ano and $row['tur_semestre']==$semestre) //se existe turma com ano e semestre iguais ent�o a turma ja existe
                
            header("Location: turma.php?mensagem=A turma ano $ano do $semestre � semestre j� existe! ");     /*informa usu�rio que turma j� existe*/
                die();   
            }
        }
   
        else
        {
            
            header("Location: turma-seg.php");   /*direciona para pr�xima tela e ja manda os valores de ano e semestre n�o edit�vel para o usu�rio*/  
            die(); 
        }
        
         /* fecha a conex�o */
                mysqli_close($conexao);
        ?>            