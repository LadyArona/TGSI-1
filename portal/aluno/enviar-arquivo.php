<!--//     include("../conexao.php");    
//    include("../restrito.php");     
//   -->

<!DOCTYPE html>           
<html>
    <head> <meta http-equiv="Content-Type" content="text/html; charset=windows-1252"> 
           <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
           <title>Portal do Aluno </title>
           <link rel="stylesheet" type="text/css" media="screen" href="/visual/mocca/assets/css/browser-detector-min.css" /> <link rel="stylesheet" type="text/css" href="/visual/mocca/assets/css/smoothness/jquery-ui-min.css"/>
           <link rel="stylesheet" type="text/css" href="/visual/mocca/assets/css/mocca-pack-ufsm-min.css"/> 
           <link rel="stylesheet" type="text/css" href="/visual/mocca/assets/css/fullcalendar.css"/>
           <script type="text/javascript" src="/visual/mocca/assets/js/browser-detector-min.js"> </script>
           <script type="text/javascript" src="/visual/mocca/assets/js/jquery-min.js"></script>
           <script type="text/javascript" src="/visual/mocca/assets/js/jquery-ui-min.js">   </script>
           <script type="text/javascript" src="/visual/mocca/assets/js/jquery-mocca-pack-min.js"></script>
           <script type="text/javascript" src="/visual/mocca/assets/js/fullcalendar/lib/moment.min.js"> </script>
           <script type="text/javascript" src="/visual/mocca/assets/js/fullcalendar/fullcalendar.min.js"></script>
           <script type="text/javascript" src="/visual/mocca/assets/js/fullcalendar/lang/pt-br.js"></script> 
           <script type="text/javascript" src="/aluno/dwr/engine.js"></script> 
           <script type="text/javascript" src="/aluno/dwr/util.js"></script> 
           <script type="text/javascript" src="/visual/mocca/assets/js/dwr.js"></script>  
    </head> 
        <body> 
            <div class="band shadowed no-print"> <!-- menu navbar -->      
                <nav class="band navbar ufsm-top"> <div class="container no-padding-v"> <ul class="nav mini">  <li>
                                <div class="btn-group"> <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"> Institucional <span class="caret"></span> </a> <ul class="dropdown-menu" role="menu">  <li role="menuitem"><a tabindex="-1" href="http://portal.ufsm.br/autenticacao"><i class="icon-globe"></i> Autenticação de Relatórios</a></li>  <li role="menuitem"><a tabindex="-1" href="http://portal.ufsm.br/biblioteca"><i class="icon-globe"></i> Biblioteca</a></li>  <li role="menuitem"><a tabindex="-1" href="http://portal.ufsm.br/documentos"><i class="icon-globe"></i> Consulta de Resoluções</a></li>  <li role="menuitem"><a tabindex="-1" href="http://portal.ufsm.br/processos"><i class="icon-globe"></i> Consulta Processos</a></li>  <li role="menuitem"><a tabindex="-1" href="http://portal.ufsm.br/ementario"><i class="icon-globe"></i> Ementário</a></li>  <li role="menuitem"><a tabindex="-1" href="http://portal.ufsm.br/indicadores"><i class="icon-globe"></i> Indicadores</a></li>  <li role="menuitem"><a tabindex="-1" href="http://portal.ufsm.br/jai"><i class="icon-globe"></i> Jornada Acadêmica Integrada</a></li>  <li role="menuitem"><a tabindex="-1" href="http://nte.ufsm.br/moodle2_UAB"><i class="icon-globe"></i> Moodle (EaD)</a></li>  <li role="menuitem"><a tabindex="-1" href="http://portal.ufsm.br/ouvidoria"><i class="icon-globe"></i> Ouvidoria</a></li>  <li role="menuitem"><a tabindex="-1" href="http://portal.ufsm.br/planejamento"><i class="icon-globe"></i> Portal de Desenvolvimento Institucional</a></li>  </ul> </div> </li>   <li> <div class="btn-group"> <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"> Aluno <span class="caret"></span> </a> <ul class="dropdown-menu" role="menu">  <li role="menuitem"><a tabindex="-1" href="http://portal.ufsm.br/agendamento"><i class="icon-globe"></i> Portal do Agendamento</a></li>  <li role="menuitem"><a tabindex="-1" href="http://portal.ufsm.br/aluno"><i class="icon-globe"></i> Portal do Aluno</a></li>  <li role="menuitem"><a tabindex="-1" href="http://portal.ufsm.br/projetos"><i class="icon-globe"></i> Projetos</a></li>  <li role="menuitem"><a tabindex="-1" href="http://portal.ufsm.br/ru"><i class="icon-globe"></i> Restaurante Universitário</a></li>  </ul> </div> </li>    </ul> </div> </nav>  <!-- main navbar --> <nav class="band navbar ufsm gradient">     <div class="container"> <ul class="nav"> <li><a class="uppercase humanist-font" href="/aluno/index.html"><span class="bold">UFSM</span> | Portal do Aluno</a></li> </ul> <ul class="nav pull-right"> <li> <div class="btn-group">    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="icon-user"></i> Juliana de Fatima da Silva <span class="caret"></span> </a> <ul class="dropdown-menu" role="menu">  <li role="menuitem"><a tabindex="-1" href="/usuario/restrita/alterarSenha.html"><i class="icon-pencil"></i> Alterar senha</a></li> <li role="menuitem"><a tabindex="-1" href="/aluno/helpMenu.html"><i class="icon-question-sign"></i> Ajuda</a></li> <li role="menuitem" class="divider"></li> <li role="menuitem"><a tabindex="-1" href="/aluno/logout.html"><i class="icon-signout"></i> Sair</a></li> </ul>   </div> </li> </ul> </div> </nav> <!-- aluno navbar -->   



<nav class="band navbar gradient control">
    <div class="container mini-padding-v">
        <ul class="nav responsive">
             
