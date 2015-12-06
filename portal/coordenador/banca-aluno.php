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

  if (isset($_POST['turma'])){
    $turma            = $mysqli->real_escape_string($_POST['turma']); /*pegando os valores do formulario*/
    $ano              = $mysqli->real_escape_string($_POST['ano']);
    $semestre         = $mysqli->real_escape_string($_POST['semestre']);
    $aluno            = $mysqli->real_escape_string($_POST['aluno']);
    $nomeorientador   = $mysqli->real_escape_string($_POST['nomeorientador']);
    $orientador       = $mysqli->real_escape_string($_POST['orientador']);
    $nome             = $mysqli->real_escape_string($_POST['nome']);
    $tituloTGSI       = BuscaDado('tud_titulo', 'turma_detalhe', 'usu_aluno = '.$aluno);
    $tipo = 0;
      } else {
            echo "<script>location.href='banca.php';</script>";
          $mysqli->Close();
            die();
        }   
 ?>
<!--Formulário Fazer igual ao avalia aluno.php-->
    <div class="band">
        <div class="container">
            <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Cadastro de Banca de <?php echo $nome?></h2>
            <fieldset class="bordered rounded shadowed margin-bottom"> 
                <div class="row">
                    <div class="span12"> 
                        <span class="label" id="descricao">Título do TGSI:</span><?php echo $tituloTGSI?>
                    </div>  
                </div>
                    <div class='row'>     
                        <div class="span12"> 
                            <span class="label" id="avaliador1" name='orientador'>Orientador e avaliador 1:</span><?php echo $nomeorientador?></div> 
                    </div>
                 <br>
            </fieldset>
            <form id="insereBanca" action="insere-banca.php" method="post"> 
           <fieldset class="bordered rounded shadowed margin-bottom"> 
                <legend class="h3 primary text-shadowed no-margin-bottom">Dados da Banca</legend> 
                <div class='row'> 
                    <div class="span2"> 
                         <span class="label">Tipo da Avaliação<span class="required"></span></span>
                         <select id="tipo" name="tipo" class="textfield width-100" required> 
                                 <?php
                                if ($tipo == 0){
                                    echo "<option value='' selected='selected'></option>";
                                    echo "<option value='1'>Proposta de TGSI</option>";
                                    echo "<option value='2'>TGSI 1</option>";
                                    echo "<option value='3'>TGSI 2</option>";
                                } else if ($tipo == 1){
                                    echo "<option value=''></option>";
                                    echo "<option value='1' selected='selected'>Proposta de TGSI</option>";
                                    echo "<option value='2'>TGSI 1</option>";
                                    echo "<option value='3'>TGSI 2</option>";
                                } else if ($tipo == 2){
                                    echo "<option value=''></option>";
                                    echo "<option value='1'>Proposta de TGSI</option>";
                                    echo "<option value='2' selected='selected'>>TGSI 1</option>";
                                    echo "<option value='3'>TGSI 2</option>";
                                } else {
                                    echo "<option value=''></option>";
                                    echo "<option value='1'>Proposta de TGSI</option>";
                                    echo "<option value='2'>TGSI1</option>";
                                    echo "<option value='3'selected='selected'>TGSI 2</option>";  
                                }
                            ?>
                            </select>
                    </div>
                    <div class="span2">
                        <span class="label">Data<span class="required"></span></span><br>
                        <input id="data" name="data" class="textfield width-100" type="date" maxlength="150" required>
                    </div>
                    <div class="span2">
                        <span class="label">Hora<span class="required"></span></span><br>
                        <input id="hora" name="hora" class="textfield width-100" type="time" maxlength="150" required>
                    </div>
                
                    <div class="span6">
                        <span class="label">Local da Defesa<span class="required"></span></span><br>
                        <input id="local" name="local" class="textfield width-100" type="text" maxlength="150" required>
                    </div>
                </div>
                <div class="row">  
                    <div class="span6">
                        <span class="label">Avaliador 2<span class="required"></span></span>
                        <br>
                        <select class="textfield width-100" id="avaliador2" name="avaliador2" required>
                            <option value=""></option>                            
                            <?php
                                /*pega no banco de dados do usuario com categoria =3 (avaliador)*/
                                $sqlAvaliador = "SELECT distinct  u.`USU_CODIGO`,u.`USU_NOME`,c.`CAT_CODIGO`
                                                 FROM `usuario` u,`categoria` c
                                                 WHERE
                                                 c.`cat_codigo` = 3;";
                                /*retorna a quantidade registros encontrados na consulta acima */
                                $queryAvaliador = $mysqli->query($sqlAvaliador);
                                /*se quantidade de linhas maior que zero*/
                                if(mysqli_num_rows($queryAvaliador) > 0){
                                    while ($Avaliador = $queryAvaliador->fetch_assoc()) {
                                        echo '<option value="'.$Avaliador['USU_CODIGO'].'">'.$Avaliador['USU_NOME'].'</option>';
                                    }    
                                }
                            ?>
                        </select>
                     </div>
                    
                    <div class="span6">
                        <span class="label">Avaliador 3<span class="required"></span></span>
                        <br>
                        <select id="avaliador3" name="avaliador3" class="textfield width-100"> 
                             <option value=""></option>                            
                            <?php
                                $queryAvaliador = $mysqli->query($sqlAvaliador);
                                 /*se quantidade de linhas maior que zero*/
                                if(mysqli_num_rows($queryAvaliador) > 0){
                                    while ($Avaliador = $queryAvaliador->fetch_assoc()) {
                                        echo '<option value="'.$Avaliador['USU_CODIGO'].'">'.$Avaliador['USU_NOME'].'</option>';
                                    }    
                                }
                            ?>                              
                        </select>
                    </div>
                </div>
                <br> 
             </fieldset>
                 <div class="form-actions">
                    <button class="btn left cancelBtn" id="cancelar" name="cancel" type="button" onclick="parent.location='index.php'">
                        <i class="icon-ban-circle"></i> Cancelar</button>
                    <button class="btn left Reset" id="limpar" name="limpar" type="reset">
                        <i class="icon-eraser"></i> Limpar</button>
                        <input type="hidden" name="orientador" value="<?php echo $orientador; ?>">
                        <input type="hidden" name="descricao" value="<?php echo $tituloTGSI; ?>">
                        <input type="hidden" name="turma" value="<?php echo $turma; ?>">
                        <input type="hidden" name="aluno" value="<?php echo $aluno; ?>">
                        <input type="hidden" name="nome" value="<?php echo $nome; ?>">
                        
                    <button class="btn primary saveBtn" id="salvar" name="save" type="submit">
                        <i class="icon-save"></i> Salvar</button>
                   </div>
        </form>
        </div>
    </div>

<?php
	include("../rodape.php");
?>
<br>
