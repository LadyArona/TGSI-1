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

//if (isset($_POST['turma'])){
//$data = $mysqli->real_escape_string($_POST['data']); /*pegando os valores do formulario*/
//$hora = $mysqli->real_escape_string($_POST['hora']);
//$local = $mysqli->real_escape_string($_POST['local']);
//
//} else {
//echo "<script>location.href='banca.php';</script>";
//$mysqli->Close();
//die();
//}    
//?>
<!--Formulário Fazer igual ao avalia aluno.php-->
    <div class="band">
        <div class="container">
            <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Cadastro de Banca</h2>
            <fieldset class="bordered rounded shadowed margin-bottom"> 
                <legend class="h3 primary text-shadowed no-margin-bottom">Dados do Aluno e Banca</legend> 
                <div class="row"> 
                    <div class="span4"> 
                        <span class="label" id="nome">Nome do aluno:</span><?php echo $nome?></div>
                    <div class="span4"> 
                        <span class="label" id="tipo">Tipo de avaliação:</span><?php echo $nome?></div> 
                    <div class="span4"> 
                        <span class="label" id="descricao">Título do TGSI:</span><?php echo $nome?></div> 
                 <div class='row'>  
                    <div class="span2">
                        <span class="label" id="data">Data:</span><?php echo $nome?></div>
                    <div class="span2">
                        <span class="label" id="hora">Hora:</span><?php echo $nome?></div>                       
                    <div class="span8">
                       <span class="label" id="local">Local da Defesa:</span><?php echo $nome?></div>
                </div>    
            </fieldset>
         <form id="insereBanca" action="insere-banca-detalhe.php" method="post">
           <fieldset class="bordered rounded shadowed margin-bottom"> 
                <legend class="h3 primary text-shadowed no-margin-bottom">Dados dos Avaliadores</legend> 
                <div class='row'>     
                    <div class="span12"> 
                        <span class="label" id="avaliador1" name='avaliador1'>O avaliador 1 é o Orientador:</span><?php echo $nome?></div>
                </div>
                <div class='row'>  
                    <div class="span6">
                        <span class="label">Avaliador 2<span class="required"></span></span>
                        <br>
                        <select id="avaliador2" name="avaliador2" class="textfield width-100"> 
                            <option value='1'>Avaliadorx</option>
                            <option value='2'>Avaliadory</option>                                      
                        </select>
                     </div>
                    <div class="span6">
                        <br>
                        <select id="avaliador3" name="avaliador3" class="textfield width-100"> 
                            <option value='1'>Avaliadorx</option>
                            <option value='2'>Avaliadory</option>                                      
                        </select>
                    </div>
                </div>
             </fieldset>
                 <div class="form-actions">
                    <button class="btn left cancelBtn" id="cancelar" name="cancel" type="button" onclick="parent.location='index.php'">
                        <i class="icon-ban-circle"></i> Cancelar</button>
                    <button class="btn left Reset" id="limpar" name="limpar" type="reset">
                        <i class="icon-eraser"></i> Limpar</button>
                    <button class="btn primary saveBtn" id="salvar" name="save" type="submit">
                        <i class="icon-save"></i> Salvar</button>
                </div>
        </form>
        </div>
    </div>

<?php
	include("../rodape.php");
