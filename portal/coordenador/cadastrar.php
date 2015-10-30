<?php
    include("../restrito.php");
    include("cabecalho.php");
    include("../navbar.php");
    include("navbar-coordenador.php");
?>

    <!-- main -->
    <div class="band">
        <div class="container">
            <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Cadastro de Usuário</h2>
           <!--Caixa de busca-->
            <div class="row">
                <div class="row large-margin-top"> 
                    <div class="span4"> 
                        <label class="label" for="numeroControle">Matrícula</label>
                        <br >
                        <div class="input-append width-100"> 
                            <div class="addon-wrapper"> 
                                <button id="search-btn1" type="button" class="btn primary small" onclick="buscaRegistro();">
                                    <i class="icon-search"></i> Buscar
                                </button> 
                            </div> 
                            <div class="input-wrapper"> 
                                <input id="numeroControle" type="search" name="numeroControle" class="textfield"/> 
                            </div> 
                        </div> 

                        <span id="registroErro" class="pill error" style="display: none;"></span> 
                    </div> 
                </div>
            </div>
            <br>                
            <?php
                if(isset($_GET['mensagem'])){
                    echo "<div class='row'><div class='span8'><div class='box success'><button type='button' class='close' data-dismiss='box'>&times;</button>";
                    echo $_GET['mensagem'];
                    echo "</div></div></div>";
                }
            ?>
            <!--Formulário-->
             <form id="insereUsuario" action="insere-usuario.php" method="post">            
                <div class="box shadowed bordered rounded">                   
                    <div class="row">
                        <div class="span4">
                            <span class="label">Login<span class="required"></span></span><br>
                            <input id="login" name="login" class="textfield width-100" type="text" maxlength="150" required>
                        </div>
                        <div class="span4">
                            <span class="label">Senha<span class="required"></span></span><br>
                            <input id="senha" name="senha" class="textfield width-100" type="text" maxlength="150" required>
                        </div>
                       
                        <div class="span4">
                            <span class="label">Matrícula<span class="required"></span></span><br>
                            <input id="matricula" name="matricula" class="textfield width-100" type="text" maxlength="150" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="span4">
                            <span class="label">Nome<span class="required"></span></span><br>
                            <input id="nome" name="nome" class="textfield width-100" type="text" maxlength="150" required>
                        </div>

                        <div class="span4">
                            <span class="label">E-mail<span class="required"></span></span><br>
                            <input id="email" name="email" class="textfield width-100" type="email" maxlength="150" required>
                        </div>

                        <div class="span4">
                            <span class="label">Situação<span class="required"></span></span><br>
                            <select class="textfield width-100" id="situacao" name="situacao" required>
                                <option value="0">Ativo</option>
                                <option value="1">Inativo</option>
                              </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="span12">                            
                            <span class="label">Categoria<span class="required"></span></span><br>
                            <input id="categoria1" name="categoria[]" type="checkbox" value="1" >
                            <label for="categoria1">Coordenador</label>
                            <br><input id="categoria2" name="categoria[]" type="checkbox" value="2">
                            <label for="categoria2">Professor(Orientador)</label>
                            <br><input id="categoria3" name="categoria[]" type="checkbox" value="3">
                            <label for="categoria3">Professor(Avaliador)</label>
                            <br><input id="categoria4" name="categoria[]" type="checkbox" value="4">
                            <label for="categoria4">Aluno</label></span>
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