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

    if (isset($_POST['aluno'])) {
        $ano        = $mysqli->real_escape_string($_POST['ano']);
        $semestre   = $mysqli->real_escape_string($_POST['semestre']);
        $aluno      = $mysqli->real_escape_string($_POST['aluno']); /*pegando os valores do formulario*/
        $turma      = $mysqli->real_escape_string($_POST['turma']); /*pegando os valores do formulario*/
        $orientador = $mysqli->real_escape_string($_POST['orientador']);
        $nome           = BuscaDado('usu_nome', 'usuario', 'usu_codigo = '.$aluno);
        $nomeorientador = BuscaDado('usu_nome', 'usuario', 'usu_codigo = '.$orientador);
        

    }   
?>

 <div class="band">
    <div class="container">
        <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Bancas cadastradas para <?php echo $nome; ?> - <?php echo $semestre; ?>º Semestre de <?php echo $ano; ?></h2>
        <div class="box shadowed bordered rounded">
            <?php
                /*pega no banco de dados da turma */
                $sqlBanca = "SELECT `ban_codigo`, `ban_hora`, `ban_tipo`, `ban_data`, `ban_descricao`, `ban_local`, `usu_codigo`, `tur_codigo`, 
                             case 
                                 when `ban_tipo` = 1 then
                                     'Proposta'
                                 when `ban_tipo` = 2 then
                                     'TGSI 1'
                                 when `ban_tipo` = 3 then
                                     'TGSI 2'
                             end as `ban_tipo_nome`                              
                             FROM `banca` 
                             WHERE `usu_codigo` = ".$aluno;
                /*retorna a quantidade registros encontrados na consulta acima */
                $queryBanca = $mysqli->query($sqlBanca);

                /*se quantidade de linhas maior que zero*/
                if(mysqli_num_rows($queryBanca) > 0){
                    echo '<br>';
                    echo '<div id="paginationWrapper">'; 
                    echo '    <table class="bordered rounded diced striped hovered shadowed narrow table">'; 
                    echo '        <thead class="header">'; 
                    echo '            <tr>'; 
                    echo '                <th WIDTH="100">Tipo</th>'; 
                    echo '                <th WIDTH="100">Data</th>'; 
                    echo '                <th WIDTH="100">Hora</th>';
                    echo '                <th>Descricao</th>';
                    echo '                <th>Local</th>';
                    echo '                <th WIDTH="155"></th>';
                    echo '            </tr>'; 
                    echo '        </thead>';                     
                    echo '        <tbody>'; 
                    while ($ResultadoBanca = $queryBanca->fetch_assoc()) { 
                        echo '        <tr data-role="tableRow" data-id="">'; 
                        echo '            <td WIDTH="100">'.$ResultadoBanca['ban_tipo_nome'].'</td>'; 
                        echo '            <td WIDTH="100">'.date('d/m/Y', strtotime($ResultadoBanca['ban_data'])).'</td>'; 
                        echo '            <td WIDTH="100">'.$ResultadoBanca['ban_hora'].'</td>';
                        echo '            <td>'.$ResultadoBanca['ban_descricao'].'</td>';
                        echo '            <td>'.$ResultadoBanca['ban_local'].'</td>';
                        echo              '<td WIDTH="155">';
                        echo '                <div class="align-center align-center-phone">';                         
                        echo '                    <form name="verbanca" method="POST" action="banca-aluno.php">';                              
                        echo '                        <input type="hidden" name="aluno" value="'.$aluno.'">';
                        echo '                        <input type="hidden" name="ano" value="'.$ano.'">';
                        echo '                        <input type="hidden" name="semestre" value="'.$semestre.'">';
                        echo '                        <input type="hidden" name="turma" value="'.$turma.'">';
                        echo'                         <input type="hidden" name="nomeorientador" value="'.$nomeorientador.'">';
                            
//                                               $sql = "SELECT bav.`bav_codigo`
//                                                    FROM `banca_detalhe_avaliacao` as bav
//                                                            INNER JOIN `banca_detalhe` as bd
//                                                            ON bd.`band_codigo` = bav.`band_codigo`
//                                                        INNER JOIN `banca` as b
//                                                            ON b.`ban_codigo` = bd.`ban_codigo`
//                                                    WHERE b.`ban_tipo` = $tipo_avaliacao
//                                                    AND b.`usu_codigo` = $cod_usuario;";
    
    
                        echo '                        <button class="btn primary gerarBtn small" id="gerar" name="gerar"  type="Submit">';
                        echo '                            <i class="icon-edit"></i> Editar';
                        echo '                        </button>';                                         
                        echo '                    </form>';
                        echo '                </div>';
                        echo '             </td>';
                        echo '        </tr>';
                    } 
                    echo '        </tbody>'; 
                    echo '    </table>'; 
                    echo '</div>';                                 
                } else {
                    //função recebe mensagem -> Não existe bancas para aluno
                    echo '<br>'; 
                    echo "<div class='row'><div class='span8'><div class='box error";
                    echo "'><button type='button' class='close' data-dismiss='box'>&times;</button>Nenhuma banca cadastrada para $nome.";
                    echo "</div></div></div>";                     
                }
            ?>
            <br>
        </div>
        <div class="container">
            <div class="row"> 
                <div class="span8 align-left"> 
                    <form name="voltar" method="POST" action="banca-turma.php">                              
                        <input type="hidden" name="ano" value="<?php echo $ano; ?>">
                        <input type="hidden" name="semestre" value="<?php echo $semestre; ?>">
                        <button class="btn primary gerarBtn" id="voltar" name="voltar"  type="Submit">
                            <i class="icon-arrow-left"></i> Voltar
                        </button>                                         
                    </form> 
                </div>
                
                <div class="span4 align-right">
                    <form name="voltar" method="POST" action="banca-aluno.php">                              
                        <input type="hidden" name="ano" value="<?php echo $ano; ?>">
                        <input type="hidden" name="semestre" value="<?php echo $semestre; ?>">
                        <input type="hidden" name="turma" value="<?php echo $turma; ?>">
                        <input type="hidden" name="aluno" value="<?php echo $aluno; ?>">
                        <input type="hidden" name="nomeorientador" value="<?php echo $nomeorientador; ?>">
                        <input type="hidden" name="orientador" value="<?php echo $orientador; ?>">
                        <input type="hidden" name="nome" value="<?php echo $nome; ?>">
                       
                        <button class="btn primary gerarBtn" id="novaBanca" name="novaBanca" type="submit">
                        <i class="icon-plus"></i> Cadastrar Nova Banca</button>                        
                    </form>                     
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<?php 

   include("../rodape.php");
    $mysqli->Close();
            