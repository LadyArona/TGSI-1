<?php
    //Define a página como sendo do coordenador para uso restrito
    session_start();
    $_SESSION['categoriaPagina'] = 2;
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
                <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Orientandos</h2>
                 <div class="row">
                    <div class="span6">
                        <div class="box info bordered tip shadowed rounded">
                            <br>
                            <p><b>201521347 - Francieli Zanardi</b>
                            <br>Perfil dos Profissionais e das Empresas de Tecnologia da Informação (TI) da Cidade de Frederico Westphalen - RS</p>
                            <br>
                            <div class="container"> 
                                <div class="row">
                                    <div class="span4">
                                        <div class="box success bordered tip shadowed rounded">
                                            <span class="text">Proposta</span>
                                            <br><span class="text">25/08/2015</span>
                                            <br><button type="button" class="btn mini link">- download -</button>
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="box warning bordered tip shadowed rounded">
                                            <span class="text">TGSI 1</span>
                                            <br><span class="text">25/09/2015</span>
                                            <br><button type="button" class="btn mini link">- download -</button>
                                        </div> 
                                    </div>
                                    <div class="span4">
                                        <div class="box control bordered tip shadowed rounded">
                                            <span class="text">TGSI 2</span>
                                            <br><span class="text">25/10/2015</span>
                                            <br><button type="button" class="btn mini link disabled">- download -</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="span6">
                        <div class="box info bordered tip shadowed rounded">
                            <br>
                            <p><b>201421350 - Daniel Prediger</b>
                            <br> Modelo de Aplicabilidade de Sistema RFID para Rastreabilidade na Indústria Alimentícia</p>
                            <br>
                            <div class="container"> 
                                <div class="row">
                                    <div class="span4">
                                        <div class="box error bordered tip shadowed rounded">
                                            <span class="text">Proposta</span>
                                            <br><span class="text">25/08/2015</span>
                                            <br><button type="button" class="btn mini link disabled">- download -</button>
                                        </div>
                                    </div>
                                    <div class="span4">
                                        <div class="box control bordered tip shadowed rounded">
                                            <span class="text">TGSI 1</span>
                                            <br><span class="text">25/09/2015</span>
                                            <br><button type="button" class="btn mini link disabled">- download -</button>
                                        </div> 
                                    </div>
                                    <div class="span4">
                                        <div class="box control bordered tip shadowed rounded">
                                            <span class="text">TGSI 2</span>
                                            <br><span class="text">25/10/2015</span>
                                            <br><button type="button" class="btn mini link disabled">- download -</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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