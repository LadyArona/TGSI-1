<?php
    include("../restrito.php");
    include("cabecalho.php");
    include("../navbar.php");
    include("navbar-coordenador.php");
    include("../include/funcoes.php");
    include("../include/conexao.php");
 
   
    $ano            = $mysqli->real_escape_string($_POST['ano']); /*pegando os valores do formulario*/
    $semestre       = $mysqli->real_escape_string($_POST['semestre']);

    /*pega no banco de dados da turma */
    $query = mysqli_query($conexao,"SELECT  tur_ano ,tur_semestre,tur_descricao, tur_data_proposta from turma where tur_ano = '$ano' and tur_semestre = '$semestre'")or die(mysql_error());
    /*retorna a quantidade registros encontrados na consulta acima */
    $numrow = mysqli_num_rows($query);
    /*se quantidade de linhas maior que zero*/
         if($numrow > 0)
        {
         /*Retorna uma matriz que corresponde a linha obtida e move o ponteiro interno dos dados adiante */
         while($row=mysqli_fetch_array($query))
         {
            /*se ele encontrar linha com ano digitado igual a ano inserido e semestre digitado igual a semestre inserido a turma ja existe! */
            if($row['tur_ano'] == $ano and $row['tur_semestre']==$semestre){ //se existe turma com ano e semestre iguais então a turma ja existe

            echo "<script>location.href='turma.php?mensagem=$ano&semestre=$semestre';</script>";
            }
        }}
       
        else
        {
           ?>
             <div class="band">
        <div class="container">
            <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Cadastro de Turma</h2>
                       
            <br>  
            <!--Formulário-->
            <form id="insereTurma" action="insere-turma.php" method="post"> <!--envia dados para insere-turma.php ao clicar em Salvar-->  
        
                <div class="box shadowed bordered rounded">
                    <div class="row">
                        <div class="span4">
                            <span class="label">Ano<span class="required"></span></span><br>
                            <input id="ano" value= "<?php echo $ano ?>" name="ano" class="textfield width-100" type="number" maxlength="150" disabled="">
                        </div>
                        <div class="span4">
                            <span class="label">Período<span class="required"></span></span><br>
                            <select class="selectfield" id="semestre" name="semestre" disabled="">
                                <option value="<?php echo $semestre ?>">1. Semestre</option>
                                <option value="<?php echo $semestre ?>">2. Semestre</option>
                              </select>
                        </div>
                       
                        <div class="span4">
                            <span class="label">Data de entrega<span class="required"></span></span><br>
                            <input id="data" name="data_proposta" class="textfield width-100" type="date" maxlength="150" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="span11">
                            <span class="label">Descrição<span class="required"></span></span><br>
                            <input id="descricao" name="descricao" class="textfield width-100" type="text" maxlength="150" required>
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
include("../include/conexao.php");
   /* fecha a conexão */
            mysqli_close($conexao);
            include("../rodape.php");
             }           
            ?>


