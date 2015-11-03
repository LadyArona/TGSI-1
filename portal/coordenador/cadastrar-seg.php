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
    
    /*pegando os valores do formulario*/
    $matricula = $mysqli->real_escape_string($_POST['matricula']); 
     
    /*pega no banco de dados do usuario */
    $query = "SELECT `USU_CODIGO`, `USU_LOGIN`, `USU_NOME`, `USU_EMAIL`, `USU_MATRICULA`, `USU_SITUACAO` 
              FROM `usuario` 
              WHERE `USU_MATRICULA` = '$matricula'";
    /*retorna a quantidade registros encontrados na consulta acima */
    $queryUsu = $mysqli->query($query);
    
    /*se quantidade de linhas maior que zero então já existe usuario cadastrado*/
    if(mysqli_num_rows($queryUsu) > 0){
        $resultado = $queryUsu->fetch_assoc();
        $codigo   = $resultado['USU_CODIGO'];
        $login    = $resultado['USU_LOGIN'];
        $nome     = $resultado['USU_NOME'];
        $email    = $resultado['USU_EMAIL'];
        $situacao = $resultado['USU_SITUACAO'];
    } else {
        $codigo   = '';
        $login    = '';
        $nome     = '';
        $email    = '';
        $situacao = 0;          
    } 
    
    $senha = geraSenha(9, false, true);
?>

    <!-- main -->
    <div class="band">
        <div class="container">
            <?php
                if (($codigo >= 0) && ($codigo != '')){
                    echo "<h2 class='primary stroked-bottom text-shadowed margin-bottom'> Cadastro de Usuário - Editando usuário</h2>";
                } else {
                    echo "<h2 class='primary stroked-bottom text-shadowed margin-bottom'> Cadastro de Usuário - Novo usuário</h2>";
                }           
            ?>                 
            <!--Formulário-->
             <form id="insereUsuario" action="insere-usuario.php" method="POST">            
                <div class="box shadowed bordered rounded">                   
                    <div class="row">
                        <div class="span4">
                            <span class="label">Login<span class="required"></span></span><br>
                            <input id="login" value= "<?php echo $login ?>" name="login" class="textfield width-100" type="text" maxlength="150" required>
                        </div>
                        <div class="span4">
                            <span class="label">Senha<span class="required"></span></span><br>
                            <input id="senha" value= "<?php echo $senha ?>" name="senha" class="textfield width-100" type="text" maxlength="150" required>
                        </div>
                       
                        <div class="span4">
                            <span class="label">Matrícula<span class="required"></span></span><br>
                            <input id="matricula" value= "<?php echo $matricula ?>" name="matricula" class="textfield width-100" type="text" maxlength="150" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="span4">
                            <span class="label">Nome<span class="required"></span></span><br>
                            <input id="nome" value= "<?php echo $nome ?>" name="nome" class="textfield width-100" type="text" maxlength="150" required>
                        </div>

                        <div class="span4">
                            <span class="label">E-mail<span class="required"></span></span><br>
                            <input id="email" value= "<?php echo $email ?>" name="email" class="textfield width-100" type="email" maxlength="150" required>
                        </div>

                        <div class="span4">
                            <span class="label">Situação<span class="required"></span></span><br>
                            <select class="textfield width-100" id="situacao" name="situacao" required>
                                <?php
                                    if ($situacao = 0){
                                        echo "<option value='0' selected='selected'>Ativo</option>";
                                        echo "<option value='1'>Inativo</option>";    
                                    } else {
                                        echo "<option value='0'>Ativo</option>";
                                        echo "<option value='1' selected='selected'>Inativo</option>";                                        
                                    }
                                ?>                                
                              </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="span12"> 
                            <span class='label'>Categoria<span class='required'></span></span><br>
                            <?php
                                if (($codigo >= 0) && ($codigo != '')) {
                                    /*pega no banco de dados do usuario */
                                    $sqlCat = "SELECT c.`cat_codigo` 
                                               FROM `usuario_categoria` as c
                                               WHERE (c.`usu_codigo` = '$codigo')";
                                    /*retorna a quantidade registros encontrados na consulta acima */
                                    $queryCat = $mysqli->query($sqlCat);

                                    /*se quantidade de linhas maior que zero então já existe usuario cadastrado*/
                                    if(mysqli_num_rows($queryCat) > 0){
                                        $resultado = $queryCat->fetch_assoc();
                                        
                                        
                                            if ($resultado['cat_codigo'] == 1) {
                                                echo "<input id='categoria1' name='categoria[]' type='checkbox' value='1' checked>";
                                                echo "<label for='categoria1'>Coordenador</label>";                                                
                                            } else
                                            
                                            if ($resultado['cat_codigo'] == 2) {
                                                echo "<br><input id='categoria2' name='categoria[]' type='checkbox' value='2' checked>";
                                                echo "<label for='categoria2'>Professor(Orientador)</label>";                                                
                                            } else
                                            
                                            if ($resultado['cat_codigo'] == 3) {
                                                echo "<br><input id='categoria3' name='categoria[]' type='checkbox' value='3' checked>";
                                                echo "<label for='categoria3'>Professor(Avaliador)</label>";                                                
                                            } else
                                            
                                            if ($resultado['cat_codigo'] == 4) {
                                                echo "<br><input id='categoria4' name='categoria[]' type='checkbox' value='4' checked>";
                                                echo "<label for='categoria4'>Aluno</label></span>";                                                
                                            }
                                                                              
                                    } else {
                                        echo "<input id='categoria1' name='categoria[]' type='checkbox' value='1' >";
                                        echo "<label for='categoria1'>Coordenador</label>";
                                        echo "<br><input id='categoria2' name='categoria[]' type='checkbox' value='2'>";
                                        echo "<label for='categoria2'>Professor(Orientador)</label>";
                                        echo "<br><input id='categoria3' name='categoria[]' type='checkbox' value='3'>";
                                        echo "<label for='categoria3'>Professor(Avaliador)</label>";
                                        echo "<br><input id='categoria4' name='categoria[]' type='checkbox' value='4'>";
                                        echo "<label for='categoria4'>Aluno</label></span>";
                                    }
                                }
                            ?>

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