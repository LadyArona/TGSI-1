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
        $turma = $mysqli->real_escape_string($_POST['turma']); /*pegando os valores do formulario*/
        $ano = $mysqli->real_escape_string($_POST['ano']);
        $semestre = $mysqli->real_escape_string($_POST['semestre']);
        $aluno = $mysqli->real_escape_string($_POST['aluno']);
        
        $nome = BuscaDado('usu_nome', 'usuario', 'usu_codigo = '.$aluno);
    } else {
        echo "<script>location.href='banca.php';</script>";
        $mysqli->Close();
        die();
    }    
 ?>
<!--Formulário Fazer igual ao avalia aluno.php-->
    <div class="band">
        <div class="container">
            <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Cadastro de Banca</h2>
            <fieldset class="bordered rounded shadowed margin-bottom"> 
                <legend class="h3 primary text-shadowed no-margin-bottom">Dados do aluno</legend> 
                <div class="row"> 
                    <div class="span12"> 
                        <span class="label" id="nome">Nome do aluno:</span><?php echo $nome?></div>
                </div>
                <div class="row"> 
                    <div class="span12"> 
                        <span class="label" id="tipo">Tipo de avaliação:</span><?php echo $nome?></div> 
                </div> 
                <div class="row"> 
                    <div class="span12"> 
                        <span class="label" id="descricao">Título do TGSI:</span><?php echo $nome?></div> 
                </div> 
            </fieldset>
                
        <form id="insereBanca" action="insere-banca.php" method="post">
            <div class="box shadowed bordered rounded">
                <div class='row'>  
                    <div class="span2">
                        <span class="label">Data<span class="required"></span></span><br>
                        <input id="data" name="data" class="textfield width-100" type="date" maxlength="150" required>
                    </div>
                    <div class="span2">
                        <span class="label">Hora<span class="required"></span></span><br>
                        <input id="hora" name="hora" class="textfield width-100" type="hora" maxlength="150" required>
                    </div>
                   <div class="span8">
                        <span class="label">Local da Defesa<span class="required"></span></span><br>
                        <input id="local" name="local" class="textfield width-100" type="text" maxlength="150" required>
                    </div>
                </div>
            </div>
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
