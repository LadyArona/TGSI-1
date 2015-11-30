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
            <form id="insereBanca" action="insere-banca.php" method="post">
                    <div class="box shadowed bordered rounded">
                        <div class="row">
                            <div class="span5">
                                <span class="label">Aluno<span class="required"></span></span><br>
                                <input id="aluno" name="aluno" value="<?php echo $nome?>" class="textfield width-100" type="text" maxlength="150" required>  
                            </div>
                            <div class="span3">
                                <span class="label">Tipo<span class="required"></span></span><br>
                                <input id="tipo" name="tipo" value="" class="textfield width-100" type="text" maxlength="150" required>     
                              </div>
                            <div class="span2">
                                <span class="label">Data<span class="required"></span></span><br>
                                <input id="data" name="data" class="textfield width-100" type="date" maxlength="150" required>
                            </div>
                            <div class="span2">
                                <span class="label">Hora<span class="required"></span></span><br>
                                <input id="hora" name="hora" class="textfield width-100" type="hora" maxlength="150" required>
                            </div>
                        <div class="row">
                            <div class="span6">
                                <span class="label">Título do Trabalho<span class="required"></span></span><br>
                                <input id="titulo" name="titulo" class="textfield width-100" type="text" maxlength="150" required>
                            </div>                                 
                            <div class="span3">
                                <span class="label">Descrição<span class="required"></span></span><br>
                                <input id="descricao" name="descricao" value="" class="textfield width-100" type="text" maxlength="150" required>
                            </div>
                            <div class="span3">
                                <span class="label">Professor Orientador<span class="required"></span></span><br>
                                <input id="professorOrientador" name="professorOrientador" value="" class="textfield width-100" type="text" maxlength="150" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span3"> 
                                <span class="label">Professor Avaliador 1<span class="required"></span></span>
                                <br>
                                    <select id="avaliador" name="avaliador" class="textfield width-100"> 
                                    <option value='1'>1. Avaliador 1</option>
                                    <option value='2'>2. Avaliador 2</option>                                      
                                    </select>
                            </div>
                            <div class="span3"> 
                                <span class="label">Professor Avaliador 1<span class="required"></span></span>
                                <br>
                                    <select id="avaliador" name="avaliador" class="textfield width-100"> 
                                    <option value='1'>1. Avaliador 1</option>
                                    <option value='2'>2. Avaliador 2</option>                                      
                                    </select>
                            </div>
                            <div class="span6">
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
