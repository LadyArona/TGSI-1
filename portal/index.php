<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
            include("cabecalho.php");
        ?>
        <title>Gerenciador de TGSI</title>               

        <style>  
            .themed-band { 
                    background-color: #12416B; 
                    background-image: url("./img/UFSM-banner-bg.jpg"); 
                    //top left repeat-x; 
            } 
            .form-spacing { 
                    height: 60px; 
            } 
            .form { 
                    margin-top: 1em; 
                    margin-bottom: 1em; 
                    background-color: rgba(245, 245, 245, .94); 
            } 
            .transparent-subband { 
                /*min-height: 120px;*/ 
                background-color: rgba(255, 255, 255, .85); 
            } 
            .form-subband { 
                /*background-color: rgba(255, 255, 255, .1);*/ 
            } 
            .container.semi-narrow { 
                    padding-top: .5em; 
                    padding-bottom: .5em; 
            } 
        </style> 
    </head> 

    <body>
        <!-- main --> 
        <div class="band"> 
            <div class="band themed-band shadowed"> 
                <div class="band transparent-subband"> 
                    <div class="container">  
                            <a class="no-link h1 pull-right no-margin-top uppercase humanist-font" href="index.html"><b>UFSM</b> | Gerenciamento de TGSI</a> 
                    </div> 
                </div> 

<div class="band form-subband"> 
    <div class="container no-padding-v"> 
            <div class="row"> 
                <div class="span4"> 
                    <div class="form-spacing hidden-phone-tablet">				
                    </div> 

                        <img class="responsive hidden-phone" src="./img/UFSM-banner-logo.png" alt="logo"> 
                </div>

                    <div class="span8"> 
                        <div class="form-spacing hidden-phone-tablet">									
                        </div> 

                            <div class="box form bordered shadowed rounded pull-right-tablet-desktop">

                                <div class="span5"> 
                                <form action="login.php" method="post"> 
                                    <div class="row">									
                                    </div> 

                                    <div class="row"> 
                                        <div class="span12 padding-top"> 
                                                <label for="login" class="label">Usu�rio</label> 
                                                <input id="login" name="j_username" type="text" class="textfield width-100 block" value=""> 
                                        </div> 
                                    </div> 

                                    <div class="row"> 
                                        <div class="span12 padding-top"> 
                                                <label for="senha" class="label">Senha</label> 
                                                <input id="senha" name="j_password" type="password" class="textfield width-100 block"> 
                                                <span id="capsAlert_senha" class="pill danger" style="display: none;">Aten��o! O CAPS LOCK est� ligado!</span> 
                                        </div>
                                    </div> 

                                    <div class="row"> 
                                        <div class="span12 margin-top"> 
                                                <button type="submit" name="enter" class="btn primary pull-left"> <i class="icon-key"></i> Entrar </button>  
                                                <a href="esqueciSenha.php" class="btn link pull-left"> Esqueci minha senha </a> 
                                        </div>
                                    </div> 
                                    <br> 
                                    <?php
                                        if(isset($_GET['mensagem'])){
                                            echo "<div class='row'><div class='span8'><div class='box warning'><button type='button' class='close' data-dismiss='box'>&times;</button>";
                                            echo $_GET['mensagem'];
                                            echo "</div></div></div>";
                                        }
                                    ?>   
            
                                    <div class="row"> 		
                                        <div class="span12 padding-top align-justify"> Para identificar-se, utilize a sua matr�cula e a sua senha. 
                                                <!-- Caso n�o possua, utilize a funcionalidade <a href="/usuario/esqueciSenha.html" class="link ">Esqueci minha senha</a> --> 
                                        </div>
                                    </div>
                            </form>
                            </div>

                                <div class="span6 offset1"> 
                                    <div class="row"> 
                                        <div class="span12 padding-top"> 
                                            <label class="label">Instru��es - Alunos novos</label> 
                                        </div> 
                                    </div> 

                                       <div class="row"> 
                                        <div class="span12 padding-top align-justify"> 
                                                A matr�cula e a senha s�o enviados para o e-mail informado na confirma��o da matr�cula da disciplina de TGSI. Obs: Caso n�o tenha recebido esse e-mail na caixa de entrada, verifique a caixa de spam, ou entre em contato com o professor coordenador. 
                                        </div> 
                                    </div> 
                                </div> 
                            </div> 
                            <div class="row"> 		
                                <div class="span12 padding-top align-justify"> 
                                <br><br> 
                                </div> 
                            </div> 								
                        </div> 
                    </div> 

                        <script type="text/javascript"> $(document).ready(function() { $('#senha').capsAlert(); }); </script> 
                    </div>
                <?php include("rodape.php"); ?> 
            </div>
        </div> 
    </body>
</html>

