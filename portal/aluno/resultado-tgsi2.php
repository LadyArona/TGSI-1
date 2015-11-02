<?php
    //Define a página como sendo do coordenador para uso restrito
    session_start();
    $_SESSION['categoriaPagina'] = 4;
    include("../restrito.php");
    include("cabecalho.php");
    include("../navbar.php");
    include("navbar-aluno.php");
?>

    <!-- main -->
    <div class="band">
        <div class="container">
            <h2 class="primary stroked-bottom text-shadowed margin-bottom ">Resultado TGSI 2</h2>
            <span class="">Aguardando banca.</span>            
        </div>
    </div>
    
<?php include("../rodape.php"); ?>