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

    <body>
        <div class="band shadowed no-print">
        <?php
            include("../navbar.php");
            include("navbar_aluno.php");
        ?>
        </div> 

        <!-- main --> 
        <div class="band">
            <div class="container"> 
                <div class="box success bordered tip shadowed rounded">
                    <div class="row">
                        <div class="span10">
                            <h2 class="primary stroked-bottom text-shadowed margin-bottom ">Proposta</h2>
                                <p><br>
                                    Sua proposta foi aceita!<br>
                                    Agora você deve enviar o seu TGSI 1.
                                </p>
                        </div>
                        <div class="span2">
                            <br>
                            <h1 class="success align-center"><i class="icon-ok-circle"></i></h1>
                        </div>
                    </div>
                    <br>
                </div>
                <p>
                <h1 class="align-center"><i class="icon-arrow-down"></i></h1>
                </p>
                <div class="box warning bordered tip shadowed rounded">                    
                    <div class="row">
                        <div class="span10">
                            <h2 class="primary stroked-bottom text-shadowed margin-bottom ">TGSI 1</h2>
                            <p><br>Aguardando envio!<br></p>
                            <br>
                            <div class="form-actions bottom ">            
                                <button class="btn primary gerarBtn" id="gerar" name="gerar"  type="button" onclick="window.open('enviar-arquivo.php','_parent')">
                                    <i class="icon-save"></i> Enviar
                                </button>                               
                            </div>
                        </div>
                        <div class="span2">
                            <br><br>
                            <h1 class="warning align-center"><i class="icon-play-circle"></i></h1>
                        </div>
                    </div>
                </div> 
                <p>
                <h1 class="align-center"><i class="icon-arrow-down"></i></h1>
                </p>
                <div class="box info bordered tip shadowed rounded">
                    <div class="row">
                        <div class="span10">
                            <h2 class="primary stroked-bottom text-shadowed margin-bottom ">TGSI 2</h2>
                            <p><br>Aguardando liberação.<br></p>
                            <br>
                        </div>
                        <div class="span2">
                            <br>
                            <h1 class="primary align-center"><i class="icon-remove-circle"></i></h1>
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