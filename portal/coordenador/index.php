<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="windows-1252"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

         <title> Gerenciador de TGSI </title>

        <link rel="stylesheet" type="text/css" media="screen" href="../css/browser-detector-min.css"> 
        <link rel="stylesheet" type="text/css" href="../css/jquery-ui-min.css"> 
        <link rel="stylesheet" type="text/css" href="../css/mocca-pack-ufsm-min.css">
        <link rel="stylesheet" type="text/css" href="../css/fullcalendar.css">

        <script type="text/javascript" src="../js/browser-detector-min.js"> </script> 
        <script type="text/javascript" src="../js/jquery-min.js"> </script> 
        <script type="text/javascript" src="../js/jquery-ui-min.js"></script>
        <script type="text/javascript" src="../js/jquery-mocca-pack-min.js"></script> 
        <script type="text/javascript" src="../js/moment.min.js"> </script>
        <script type="text/javascript" src="../js/fullcalendar.min.js"> </script> 
        <script type="text/javascript" src="../js/pt-br.js"></script> 
        <script type="text/javascript" src="../js/engine.js"></script>
        <script type="text/javascript" src="../js/util.js"></script>
        <script type="text/javascript" src="../index_files/dwr.js"></script> 
    </head>

    <body>
        <div class="band shadowed no-print">

        <!-- main navbar --> 
            <nav class="band navbar ufsm gradient">    
                <div class="container"> 
                    <ul class="nav"> 
                        <li>
                            <a class="uppercase humanist-font" href="../">
                            <span class="bold">UFSM</span> | Gerenciador de TGSI</a>
                        </li> 
                    </ul> 

                    <ul class="nav pull-right">
                        <li> 
                            <div class="btn-group">    
                            <a class="dropdown-toggle" data-toggle="dropdown" href="https://portal.ufsm.br/aluno/index.html#"> 
                                <i class="icon-user"></i> Nome do Usuário <span class="caret"></span> 
                            </a>

                            <ul class="dropdown-menu" role="menu">  
                                <li role="menuitem">
                                    <a tabindex="-1" href="https://portal.ufsm.br/usuario/restrita/alterarSenha.html">
                                    <i class="icon-pencil"></i> Alterar senha</a>
                                </li> 
                                <li role="menuitem">
                                    <a tabindex="-1" href="https://portal.ufsm.br/aluno/helpMenu.html">
                                    <i class="icon-question-sign"></i> Ajuda</a></li> <li role="menuitem" class="divider">
                                </li> 
                                <li role="menuitem">
                                    <a tabindex="-1" href="https://portal.ufsm.br/aluno/logout.html">
                                    <i class="icon-signout"></i> Sair</a>
                                </li>
                            </ul>
                            </div>
                        </li>
                    </ul>
                </div> 
            </nav>

            <!-- coordenador navbar --> 
            <nav class="band navbar gradient control">
                <div class="container mini-padding-v">
                    <ul class="nav responsive">
                        <li class=""><a href="../" target=""><i class="icon-home"></i>  
                            Página Inicial </a>
                        </li>      
                        <li class="">
                        <div class="btn-group block">
                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> 
                            Cadastrar <span class="caret"></span>
                            </a>                    
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">             
                                <li class="">
                                    <a href="https://portal.ufsm.br/aluno/endereco/buscaEndereco.html" target="">
                                         Aluno
                                    </a>
                                </li>   

                                 <li class="">
                                    <a href="https://portal.ufsm.br/aluno/relatorio/fichaCadastralAluno/index.html" target="">
                                         Professor
                                    </a>
                                </li>

                                <li class="">
                                    <a href="https://portal.ufsm.br/aluno/relatorio/fichaCadastralAluno/index.html" target="">
                                         Coordenador
                                    </a>
                                </li>   
                            </ul>
                        </div>
                        </li>
                
                        <li class="">
                        <div class="btn-group block">
                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-edit"></i> 
                            Gerenciar <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">    
                                <li class="">
                                    <a href="https://portal.ufsm.br/aluno/alteracao-curricular/solicitaTrancamentoTotal.html" target="">
                                        Turmas
                                    </a>
                                </li>
            
                                <li class="">
                                    <a href="https://portal.ufsm.br/aluno/requerimento/dispensa.html" target="">
                                        Bancas
                                    </a>
                                </li>  
                            </ul>
                        </div>
                        </li>
    

    
                        <li class="">
                        <div class="btn-group block">
                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-table"></i>  
                            Pesquisa <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                               <li class="disabled">
                                    <a>
                                        Teste
                                    </a>
                                </li>
                            </ul>
                        </div>
                        </li>

    
                        <li class="">
                        <div class="btn-group block">
                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-print"></i>  
                            Relatórios <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                <li class="">
                                    <a href="https://portal.ufsm.br/aluno/relatorio/atestadoTrancamento/index.html" target="">
                                        Formulário para Definição do Tema e Professor Orientador 
                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://portal.ufsm.br/aluno/relatorio/provavelFormando/index.html" target="">
                                        Ficha de Avaliação do TGSI
                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://portal.ufsm.br/aluno/relatorio/reconhecimentoCurso/index.html" target="">
                                        Ficha de Avaliação da Proposta para TGSI
                                    </a>
                                </li>                            
                                <li class="">
                                    <a href="https://portal.ufsm.br/aluno/relatorio/certificadoBolsista/index.html" target="">
                                        Formulário para Confirmação da Entrega dos Artigos para a Banca de Avaliação
                                    </a>
                                </li>                            
                                <li class="">
                                    <a href="https://portal.ufsm.br/aluno/relatorio/certificadoBolsista/index.html" target="">
                                        Formulário para Divulgação das Bancas de TGSI
                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://portal.ufsm.br/aluno/relatorio/comprovanteMatricula/index.html" target="">
                                        Formulário para Confirmação da Entrega da Versão Final do TGSI
                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://portal.ufsm.br/aluno/relatorio/fichaCadastralAluno/index.html" target="">
                                        Parecer do Orientador para Entrega dos Artigos à Banca de Avaliação
                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://portal.ufsm.br/aluno/relatorio/historicoEscolarSimplificado/index.html" target="">
                                        Ficha de Acompanhamento das Orientações do TGSI
                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://portal.ufsm.br/aluno/relatorio/matrizCurricular/index.html" target="">
                                        Modelo de Proposta de TGSI
                                    </a>
                                </li>
                            </ul>
                        </div>
                        </li>    

    
                        <li class="">
                        <div class="btn-group block">
                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-sitemap"></i>  
                            Outros <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                <li class="">
                                    <a href="https://portal.ufsm.br/biblioteca/index.html" target="">
                                         Biblioteca
                                    </a>
                                </li>
                                <li class="">
                                    <a href="http://site.ufsm.br/ufsm/calendario-academico" target="_blank">
                                         Calendário letivo
                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://portal.ufsm.br/ru/usuario" target="">
                                         Restaurante Universitário
                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://portal.ufsm.br/prae/index.html" target="">
                                         Benefício Socioeconômico
                                    </a>
                                </li>
                                <li class="disabled">
                                    <a>
                                         Teste de suficiência em língua estrangeira
                                    </a>
                                </li>
                            </ul>
                        </div>
                        </li> 
                    </ul>
                </div>
            </nav>
        </div> 

        <!-- main --> 
        <div class="band"> 
            <div class="container"> 
                <div class="box info bordered shadowed margin-v rounded ">
                Bem vindo! Escolha a opção desejada acima.
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