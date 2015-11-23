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
?>

<!--Formulário-->
    <div class="band">
        <div class="container">
            <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Cadastro de Banca</h2>
                <form id="insereUsuario" action="insere-banca.php" method="post">
                    <div class="box shadowed bordered rounded">
                        <div class="row">
                            <div class="span2"> 
                                <label class="label" for="ano">Ano<span class="required"></span></label>
                                    <br >
                                <input id="ano" name="ano" class="textfield width-100 integer" type="text" value=""/>  
                            </div> 
                            <div class="span3"> 
                                <span class="label">Período<span class="required"></span></span>
                                     <br >
                                <select id="periodo" name="periodo" class="textfield width-100"> 
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
                                <option value="3">Aluno 3</option>
                            </select>
                            </div>
                        </div>
                    <div class="row">
                        <div class="span3">
                            <span class="label">Tipo<span class="required"></span></span><br>
                            <select class="textfield width-100" id="situacao" name="situacao" required>
                                <option value="1">1. Proposta</option>
                                <option value="1">2. TGSI 1</option>
                                <option value="2">3. TGSI 2</option>
                              </select>
                        </div>
                        
                        <div class="span2">
                            <span class="label">Data<span class="required"></span></span><br>
                            <input id="data" name="data" class="textfield width-100" type="date" maxlength="150" required>
                        </div>
                         <div class="span7">
                            <span class="label">Título do Trabalho<span class="required"></span></span><br>
                            <input id="titulo" name="titulo" class="textfield width-100" type="text" maxlength="150" required>
                        </div>
                                                                    
                    </div>
                    <div class="row">
                        <div class="span4">
                            <span class="label">Professor Orientador<span class="required"></span></span><br>
                            <input id="orientador" name="orientador" class="textfield width-100" type="text" maxlength="150" required>
                        </div>
                          <div class="span4">
                            <span class="label">Professor Avaliador 1<span class="required"></span></span><br>
                            <select class="textfield width-100" id="avaliador1" name="situacao" required>
                                <option value=""></option>
                                <option value="1">Professor 1</option>
                                <option value="2">Professor 2</option>
                                <option value="3">Professor 3</option>
                            </select>
                            </div>
                        
                        <div class="span4">
                            <span class="label">Professor Avaliador 2<span class="required"></span></span><br>
                            <select class="textfield width-100" id="avaliador2" name="situacao" required>
                                <option value=""></option>
                                <option value="1">Professor 1</option>
                                <option value="2">Professor 2</option>
                                <option value="3">Professor 3</option>
                            </select>
                        </div>   
                        </div>
                    <div class="row">
                        <div class="span6">
                        <span class="label">Descrição<span class="required"></span></span><br>
                        <input id="descricao" name="descricao" value="" class="textfield width-100" type="text" maxlength="150" required>
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
</div>
<?php
	include("../rodape.php");
?>