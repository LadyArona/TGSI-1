<?php
    include("restrito.php");    
    include("conexao.php");
    
    $sql = "SELECT C.`CAT_DESCRICAO`, C.`CAT_CODIGO` 
            FROM `categoria` AS C 
                    INNER JOIN `usuario_categoria` AS U 
                    ON U.`CAT_CODIGO` = C.`CAT_CODIGO` 
            WHERE U.`USU_CODIGO` = ".$_SESSION['UsuarioCOD'];
    
    $resposta = mysql_query($sql);
?>    
  
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="windows-1252"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

         <title> Gerenciador de TGSI </title>

        <link rel="stylesheet" type="text/css" media="screen" href="../css/browser-detector-min.css"> 
        <link rel="stylesheet" type="text/css" href="css/jquery-ui-min.css"> 
        <link rel="stylesheet" type="text/css" href="css/mocca-pack-ufsm-min.css">
        <link rel="stylesheet" type="text/css" href="css/fullcalendar.css">

        <script type="text/javascript" src="js/browser-detector-min.js"> </script> 
        <script type="text/javascript" src="js/jquery-min.js"> </script> 
        <script type="text/javascript" src="js/jquery-ui-min.js"></script>
        <script type="text/javascript" src="js/jquery-mocca-pack-min.js"></script> 
        <script type="text/javascript" src="js/moment.min.js"> </script>
        <script type="text/javascript" src="js/fullcalendar.min.js"> </script> 
        <script type="text/javascript" src="js/pt-br.js"></script> 
        <script type="text/javascript" src="js/engine.js"></script>
        <script type="text/javascript" src="js/util.js"></script>
        <script type="text/javascript" src="js/dwr.js"></script> 
    </head>

    <body>
        <div class="band shadowed no-print">
        <?php
            include("navbar.php");
        ?>
        </div> 

        <!-- main --> 
         <div class="band"> 
            <div class="container"> 
                <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Visualização do Gerenciador </h2>
                <form id="formRelatorio" action="redireciona.php" method="post"> 
                    <div class="margin-bottom">     
                        <span class="label">Visualizar como<span class="required"></span></span>
                        <br>
                        <?php                        
                            while ($registro = mysql_fetch_assoc($resposta)) {    
                                echo '<span>';
                                echo '<input id="categoria'.$registro['CAT_CODIGO'].'" name="categoria" type="radio" value="'.$registro['CAT_CODIGO'].'">';
                                echo '<label for="categoria'.$registro['CAT_CODIGO'].'">'.$registro['CAT_DESCRICAO'].'</label></span>';
                                echo '<br>';
                            }
                        ?>  
                    </div>   

                    <div class="form-actions bottom ">    
                        <button class="btn primary gerarBtn" id="entrar" name="entrar" type="submit"><i class="icon-save"></i> Entrar</button>
                    </div>
                </form>

                <script type="text/javascript"> $(document).ready(function() { $('#gerar').lockOnClick({timeout: 5000});$('#gerar').click(function() { $('#formRelatorio').submit(); }); }); </script> 

            </div> 
        </div> 

        <?php
            include("../rodape.php");
        ?>
    </body>
</html>