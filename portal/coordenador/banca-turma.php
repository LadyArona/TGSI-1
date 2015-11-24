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
?>
 <div class="band">
    <div class="container">
        <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Cadastro de Banca - Busca de alunos - <?php echo $semestre; ?>º Semestre de <?php echo $ano; ?></h2>
        <div class="box shadowed bordered rounded">
            <?php
                /*pega no banco de dados da turma */
                $sqlTurma = "SELECT  tur_codigo,tur_ano ,tur_semestre,tur_descricao, tur_data_proposta from turma where tur_ano = '$ano' and tur_semestre = '$semestre'";
                /*retorna a quantidade registros encontrados na consulta acima */
                $queryTurma = $mysqli->query($sqlTurma);

                /*se quantidade de linhas maior que zero*/
                if(mysqli_num_rows($queryTurma) > 0){
                    //busca os alunos dessa turma
                    $ResultadoTurma = $queryTurma->fetch_assoc();
                    /*pega no banco de dados da turma */
                    $sqlTurmaAluno = "SELECT `tud_codigo`, `tur_codigo`, `usu_aluno`, `usu_orientador`, `usu_coorientador`, `tud_titulo`
                                       FROM `turma_detalhe` 
                                       WHERE `tur_codigo` = ".$ResultadoTurma['tur_codigo'];
                    /*retorna a quantidade registros encontrados na consulta acima */
                    $queryTurmaAluno = $mysqli->query($sqlTurmaAluno);                
                    if(mysqli_num_rows($queryTurmaAluno) > 0){
                        echo '<br>';
                        echo '<div id="paginationWrapper">'; 
                        echo '    <table class="bordered rounded diced striped hovered shadowed narrow table">'; 
                        echo '        <thead class="header">'; 
                        echo '            <tr>'; 
                        echo '                <th WIDTH="20%">Aluno</th>'; 
                        echo '                <th WIDTH="20%">Orientador</th>'; 
                        echo '                <th>Título TGSI</th>';
                        echo '                <th WIDTH="155"></th>';
                        echo '            </tr>'; 
                        echo '        </thead>';                     
                        echo '        <tbody>'; 

                        while ($Linha = $queryTurmaAluno->fetch_assoc()) { 
                            echo '        <tr data-role="tableRow" data-id="">'; 
                            echo '            <td WIDTH="20%">';
                            echo BuscaDado('usu_nome', 'usuario', 'usu_codigo = '.$Linha['usu_aluno']);
                            echo              '</td>'; 
                            echo '            <td WIDTH="20%">';
                            echo BuscaDado('usu_nome', 'usuario', 'usu_codigo = '.$Linha['usu_orientador']);
                            echo              '</td>'; 
                            echo '            <td>'.$Linha['tud_titulo'].'</td>';
                            echo              '</td>';
                            echo              '<td WIDTH="155">';
                            echo '                <div class="align-center align-center-phone">';                         
                            echo '                    <form name="verbanca" method="POST" action="banca-lista.php">';                              
                            echo '                        <input type="hidden" name="aluno" value="'.$Linha['usu_aluno'].'">';
                            echo '                        <input type="hidden" name="ano" value="'.$ano.'">';
                            echo '                        <input type="hidden" name="semestre" value="'.$semestre.'">';
                            echo '                        <button class="btn primary gerarBtn small" id="gerar" name="gerar"  type="Submit">';
                            echo '                            <i class="icon-search"></i> Ver bancas';
                            echo '                        </button>';                                         
                            echo '                    </form>';
                            echo '                </div>';
                            echo              '</td>';
                            echo '        </tr>';
                        } 
                        echo '        </tbody>'; 
                        echo '    </table>'; 
                        echo '</div>';             
                    } else {
                        //função recebe mensagem -> Não existe alunos na turma
                        echo "<div class='row'><div class='span8'><div class='box error";
                        echo "'><button type='button' class='close' data-dismiss='box'>&times;</button>Turma do $semestre º semestre de $ano não possui alunos cadastrados.";
                        echo "</div></div></div>";
                        echo '<button class="btn left" id="voltar" name="voltar" type="button" onclick="parent.location=\'banca.php\'">'; 
                        echo '    <i class="icon-arrow-left"></i> Voltar</button>';                               
                    }
                } else {
                    //função recebe mensagem -> Não existe turma
                    echo "<div class='row'><div class='span8'><div class='box error";
                    echo "'><button type='button' class='close' data-dismiss='box'>&times;</button>Nenhuma turma cadastrada para o $semestre º semestre de $ano.";
                    echo "</div></div></div>";
                    echo '<button class="btn left" id="voltar" name="voltar" type="button" onclick="parent.location=\'banca.php\'">'; 
                    echo '    <i class="icon-arrow-left"></i> Voltar</button>';          
                }
            ?>
            <br>
        </div>                       
    </div>
</div>
<br>

<?php
    include("../rodape.php");
    $mysqli->Close();
?>


