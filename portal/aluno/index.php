<?php
    include("../restrito.php");
?>
<!DOCTYPE html>
<html>
    <head>
         <title> Gerenciador de TGSI | Aluno </title>
         
        <?php
            include("cabecalho.php");
        ?>
    </head>
    
    <style type="text/css">
        #iconBig {
            font-size: 90px;
        }
        #iconMed {
            font-size: 40px;
        }
    </style>

    <body>
        <div class="band shadowed no-print">
        <?php
            include("../navbar.php");
            include("navbar-aluno.php");
        ?>
        </div> 

        <!-- main --> 
        <div class="band align-center-phone">
            <div class="container"> 
                
                <?php
                    if(isset($_GET['mensagem'])){
                        echo "<div class='row'><div class='span8'><div class='box warning'><button type='button' class='close' data-dismiss='box'>&times;</button>";
                        echo $_GET['mensagem'];
                        echo "</div></div></div>";
                    }
                ?> 
                
                <div class="box warning bordered tip shadowed rounded">
                    <div class="row">
                        <div class="span10">
                            <h2 class="primary stroked-bottom text-shadowed margin-bottom ">Proposta</h2>
                              <div class="row">
                                <div class="span6 padding-v">                            
                                    <p>Aguardando envio!</p>
                                    <br>  
                                </div>
                                <div class="span6 padding-v align-right align-center-phone">
                                    <form name="gerar" method="POST" action="enviar-arquivo.php">
                                        <input type="hidden" name="tipo" value="1">
                                        <button class="btn primary gerarBtn" id="gerar" name="gerar"  type="Submit">
                                            <i class="icon-upload-alt"></i> Enviar Arquivo
                                        </button>                                         
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="span2 align-center padding-top">
                            <h1 id='iconBig' class="warning"><i class="icon-ok-circle"></i></h1>
                        </div>
                    </div>
                </div>
                <p>
                <h1 id='iconMed' class="align-center"><i class="icon-arrow-down"></i></h1>
                </p>
                <div class="box info bordered tip shadowed rounded">                    
                    <div class="row">
                        <div class="span10">
                            <h2 class="primary stroked-bottom text-shadowed margin-bottom ">TGSI 1</h2>
                            <div class="row">
                                <div class="span6 padding-v"> 
                                   <p>Aguardando liberação.</p>
                                </div>
                            </div>
                        </div>
                        <div class="span2 align-center padding-top">
                            <h1 id='iconBig' class="primary"><i class="icon-remove-circle"></i></h1>
                        </div>
                    </div>
                </div> 
                <p>
                <h1 id='iconMed' class="align-center"><i class="icon-arrow-down"></i></h1>
                </p>
                <div class="box info bordered tip shadowed rounded">
                    <div class="row">
                        <div class="span10">
                            <h2 class="primary stroked-bottom text-shadowed margin-bottom ">TGSI 2</h2>
                            <div class="row">
                                <div class="span6 padding-v"> 
                                   <p>Aguardando liberação.</p>
                                </div>
                            </div>
                        </div>
                        <div class="span2 align-center padding-top">
                            <h1 id='iconBig' class="primary"><i class="icon-remove-circle"></i></h1>
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