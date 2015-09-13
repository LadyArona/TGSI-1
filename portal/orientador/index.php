<?php
    include("../restrito.php");
?>
<!DOCTYPE html>
<html>
    <head>
         <title> Gerenciador de TGSI | Orientador </title>
         
        <?php
            include("cabecalho.php");
        ?>
    </head>

    <body>
        <div class="band shadowed no-print">
        <?php
            include("../navbar.php");
            include("navbar_orientador.php");
        ?>
        </div> 

        <!-- main --> 
        <div class="band"> 
            <div class="container"> 
                 <div class="row">
                    <div class="span4">
                        <div class="box info bordered tip shadowed rounded">
                            <br>
                            <h2 class="align-center">Aluno 1</h2>
                            <br>
                            <div class="row">
                                <div class="span1">
                                    <div class="box success bordered tip shadowed rounded">
                                        <span class="text align-center">Proposta</span>
                                        <span class="text align-center">25/08/2015</span>
                                    </div>
                                </div>
                                <div class="span1">
                                    <div class="box warning bordered tip shadowed rounded">
                                        <span class="text align-center">TGSI 1</span>
                                        <span class="text align-center">25/09/2015</span>
                                    </div> 
                                </div>
                                <div class="span1">
                                    <div class="box control bordered tip shadowed rounded">
                                        <span class="text align-center">TGSI 2</span>
                                        <span class="text align-center">25/09/2015</span>
                                    </div>
                                </div>
                            </div>  
                            <br>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="box info bordered tip shadowed rounded">
                            <p class="align-center"><br>
                                <h2 class="align-center">Aluno 2</h2>
                                Proposta 1<br>
                                25/08/2015<br>
                            </p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="box info bordered tip shadowed rounded">
                            <p><br>
                                <h2 class="align-center">Aluno 3</h2>
                                <span class="text align-center">TGSI 1</span>
                                <span class="text align-center">25/08/2015</span>
                            <br></p>
                        </div>
                    </div>
                </div>                
            </div>
        </div> 
        <ul class="vakata-context"></ul>
        <div id="jstree-marker" style="display: none;">&nbsp;</div>

        <?php
            include("../rodape.php");
        ?>
    </body>
</html>