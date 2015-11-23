<?php
    //Define a página como sendo do coordenador para uso restrito
    session_start();
    $_SESSION['categoriaPagina'] = 1;
    include("../restrito.php");
    
    include("cabecalho.php");
    include("../navbar.php");
    include("navbar-coordenador.php");
    include("../include/funcoes.php");
    include("../include/conexao.php"); 

    if (isset($_POST['ano'])) {
        $ano      = $mysqli->real_escape_string($_POST['ano']); /*pegando os valores do formulario*/
        $semestre = $mysqli->real_escape_string($_POST['semestre']);
    } else {
        echo "<script>location.href='banca.php';</script>";
        $mysqli->Close();
        die();
    }   
    
    /*pega no banco de dados da turma */
    $query = "SELECT  tur_codigo,tur_ano ,tur_semestre,tur_descricao, tur_data_proposta from turma where tur_ano = '$ano' and tur_semestre = '$semestre'";
    /*retorna a quantidade registros encontrados na consulta acima */
    $queryTurma = $mysqli->query($query);
    
    /*se quantidade de linhas maior que zero*/
    if(mysqli_num_rows($queryTurma) > 0){
        $resultado = $queryTurma->fetch_assoc();
        $descricao = $resultado['tur_descricao'];
        $proposta = $resultado['tur_data_proposta'];
        $codigo = $resultado['tur_codigo'];
    } else {
        $descricao = '';
        $proposta = '';
        $codigo = '';            
    }
     
    ?>  
 <div class="band">
    <div class="container">
        <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Cadastro de Banca - Busca de alunos</h2>
        <!--envia dados para turma-aluno-insere.php ao clicar em Inserir-->
        <form id="BuscaTurma" action="turma-seg.php" method="post">
            <div class="box shadowed bordered rounded">
                <div class="row">
                    <div class="span12">
                        
        <?php
            if (($codigo >= 0) && ($codigo != '')){          
                /*pega no banco de dados da turma */
                $sqlTurmaAluno = "SELECT `tud_codigo`, `usu_aluno`, `usu_orientador`, `usu_coorientador`, `tud_titulo`
                          FROM `turma_detalhe` WHERE `tur_codigo` = $codigo";
                /*retorna a quantidade registros encontrados na consulta acima */
                $queryTurmaAluno = $mysqli->query($sqlTurmaAluno);

                /*se quantidade de linhas maior que zero*/
                if(mysqli_num_rows($queryTurmaAluno) > 0){
                    echo '<br>';
                    echo '<div id="paginationWrapper">'; 
                    echo '    <table class="bordered rounded diced striped hovered shadowed narrow table">'; 
                    echo '        <thead class="header">'; 
                    echo '            <tr>'; 
                    echo '                <th WIDTH="25%">Aluno</th>'; 
                    echo '                <th WIDTH="23%">Orientador</th>'; 
                    echo '                <th WIDTH="25%">Título TGSI</th>';
                    echo '                <th WIDTH="100"></th>';
                    echo '            </tr>'; 
                    echo '        </thead>';                     
                    echo '        <tbody>';                
                    while ($Linha = $queryTurmaAluno->fetch_assoc()) { 
                        echo '        <tr data-role="tableRow" data-id="">'; 
                        echo '            <td WIDTH="25%">';
                        echo BuscaDado('usu_nome', 'usuario', 'usu_codigo = '.$Linha['usu_aluno']);
                        echo              '</td>'; 
                        echo '            <td WIDTH="23%">';
                        echo BuscaDado('usu_nome', 'usuario', 'usu_codigo = '.$Linha['usu_orientador']);
                        echo              '</td>'; 
                        echo '            <td WIDTH="25%">'.$Linha['tud_titulo'].'</td>';
                        echo              '</td>';
                        echo              '<td WIDTH="100"><div class="btn-group small">';
                        echo              '<button type="button" class="btn primary" onclick="Cadastrar()"><i class="icon-edit"></i> Cadastrar</button></div></td>';
                        echo '        </tr>';
                    } 
   
                    echo '        </tbody>'; 
                    echo '    </table>'; 
                    echo '</div>'; 
                } else {
                    echo "<div class='row'><div class='span8'><div class='box warning";
                    echo "'><button type='button' class='close' data-dismiss='box'>&times;</button>Turma nao possui alunos.";
                    echo "</div></div></div>";
                    echo '<button class="btn left" id="voltar" name="voltar" type="button" onclick="parent.location=\'banca.php\'">'; 
                    echo '    <i class="icon-arrow-left"></i> Voltar</button>';                    
                    //echo "Turma nao possui alunos.";
                }
            } else {
                //função recebe mensagem
                echo "<div class='row'><div class='span8'><div class='box error";
                echo "'><button type='button' class='close' data-dismiss='box'>&times;</button>Turma não existe.";
                echo "</div></div></div>";
                echo '<button class="btn left" id="voltar" name="voltar" type="button" onclick="parent.location=\'banca.php\'">'; 
                echo '    <i class="icon-arrow-left"></i> Voltar</button>';                  
            }
        ?>      
    </div>
</div>

<script>
    function Cadastrar()
    {
        location.href="banca-seg.php";
    }
</script>
<br>

<?php
    include("../rodape.php");
    $mysqli->Close();
?>


