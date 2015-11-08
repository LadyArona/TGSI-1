<?php
    //Define a página como sendo do coordenador para uso restrito
    session_start();
    $_SESSION['categoriaPagina'] = 1;
    include("../restrito.php");
    include("cabecalho.php");
    include("../navbar.php");
     include("../include/funcoes.php");
    include("navbar-coordenador.php");
 ?>

<!--Formulário-->
    <div class="band">
        <div class="container">
            <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Cadastro de aluno na turma</h2>
                <form id="insereUsuario" action="insere-aluno-turma.php" method="post">
                    <div class="box shadowed bordered rounded">
                        <div class="row">
                            <div class="span2"> 
                                <span class="label">Ano<span class="required"></span></span>
                                     <br >
                                <select id="semestre" name="semestre" class="textfield width-100"> 
                                    <option value="1">Ano2014</option>
                                    <option value="2">Ano2015</option>
                                    <option value="3">Ano2016</option>
                                </select>
                            </div>
                            <div class="span3"> 
                                <span class="label">Semestre<span class="required"></span></span>
                                     <br >
                                <select id="semestre" name="semestre" class="textfield width-100"> 
                                    <option value="1">1. Semestre</option>
                                    <option value="2">2. Semestre</option>
                                </select>
                            </div>
                            
                            <div class="span7">
                            <span class="label">Aluno<span class="required"></span></span><br>
                            <select class="textfield width-100" id="aluno" name="situacao" required>
                                <option value=""></option>
                                <option value="1">Aluno 1</option>
                                <option value="2">Aluno 2</option>
                                <option value="2">Aluno 3</option>
                            </select>
                            </div>
                        </div>
                    <div class="row">
                        <div class="span3">
                            <span class="label">Orientador<span class="required"></span></span><br>
                            <select class="textfield width-100" id="situacao" name="situacao" required>
                                <option value="1">Orientador1</option>
                                <option value="1">Orientador2</option>
                                <option value="2">Orientador3</option>
                              </select>
                        </div>
                        
                         <div class="span2">
                            <span class="label">Coorientador<span class="required"></span></span><br>
                            <select class="textfield width-100" id="situacao" name="situacao" required>
                                <option value="1">Coorientador1</option>
                                <option value="1">Coorientador2</option>
                                <option value="2">Coorientador3</option>
                              </select>
                        </div>
                        
                         <div class="span7">
                            <span class="label">Título TGSI<span class="required"></span></span><br>
                            <input id="nome" name="nome" class="textfield width-100" type="text" maxlength="150" required>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="span12">
                            <span class="label">Local<span class="required"></span></span><br>
                            <input id="nome" name="nome" class="textfield width-100" type="text" maxlength="150" required>
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
?>