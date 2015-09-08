<!DOCTYPE html>
<html lang="pt-br">
    <head>
            <?php
                include("cabecalho.php");
            ?>
            <title>Gerenciador de TGSI | Esqueci minha Senha</title>               
    </head> 

    <body>
        <!-- barra de navegação especial -->            
        <?php include("include/config.php"); ?>
        <nav class="band navbar ufsm gradient">    
            <div class="container"> 
                <ul class="nav"> 
                    <li>
                        <a class="uppercase humanist-font" href="<?php echo $URL_PADRAO; ?>">
                        <span class="bold">UFSM</span> | Gerenciador de TGSI</a>
                    </li> 
                </ul> 

                <ul class="nav pull-right">
                    <li> 
                        <div class="btn-group">    
                        <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo $URL_PADRAO; ?>"> 
                            <i class="icon-user"></i> Anônimo <span class="caret"></span> 
                        </a>

                        <ul class="dropdown-menu" role="menu">  
                            <li role="menuitem">
                                <a tabindex="-1" href="index.php">
                                <i class="icon-signin"></i> Login</a>
                            </li>
                        </ul>
                        </div>
                    </li>
                </ul>
            </div> 
        </nav>
        <!-- main -->
        <div class="band expansible">
            <div class="container">
                <div id="instrucoes" class="box warning bordered tip shadowed">
                    <p>Caso você tenha esquecido a sua senha, preencha os campos abaixo da seguinte forma:</p>
                    <ul class="no-bullets">
                        <li><strong>Alunos:</strong> informar a matrícula do curso atual no campo 'Login';</li>
                        <li><strong>Docentes:</strong> informar a matrícula SIAPE no campo 'Login';</li>
                        <li><strong>Demais usuários:</strong> informar o login normalmente utilizado nos sistemas;</li>
                    </ul>
                    <p>Após, o sistema enviará uma nova senha, gerada automaticamente, para o e-mail cadastrado no gerenciador.</p>
                    <p>Cada nova solicitação sobrescreve a senha anterior. Por isso, utilize sempre a senha do último e-mail recebido.</p>
                </div>
                <br>
                <form id="esqueciSenhaCommand" action="" method="post">
                    <div class="row">
                        <div class="span4">
                            <label for="usuario" class="label">Login<span class="required"></span>:</label>
                            <input id="usuario" name="usuario" class="textfield block width-100" type="text" value=""/>
                            
                        </div>
                        <div class="span4">
                            <label for="email" class="label">E-mail<span class="required"></span>:</label>
                            <input id="email" name="email" class="textfield block width-100" type="text" value=""/>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="span4">
                            <button id="solicitar" type="submit" class="btn primary"><i class="icon-envelope"></i> Solicitar senha</button>
                        </div>
                    </div>
                </form>

                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#solicitar').lockOnClick();
                    });
                </script>
            </div>
            <?php include("rodape.php"); ?> 
        </div>
    </body>
</html>