<?php
    //Define a página como sendo do coordenador para uso restrito
    session_start();
    $_SESSION['categoriaPagina'] = 3;
    include("../restrito.php");
    include("cabecalho.php");
    include("../navbar.php");
    include("navbar_avaliador.php");
    
    include("../include/conexao.php");
    include("../include/funcoes.php");    
    
    if (!isset($_POST['tipo'])) {
        echo "<script>location.href='index.php';</script>";
        die();
    } else {
        $tipo = $mysqli->real_escape_string($_POST['tipo']);;
        
        switch ($tipo){
            case 1: $tipoNome = 'Proposta'; Break; 
            case 2: $tipoNome = 'TGSI1'; Break; 
            case 3: $tipoNome = 'TGSI2'; Break; 
        }
        
        $aluno     = $mysqli->real_escape_string($_POST['aluno']);
        $alunoNome = BuscaDado('usu_nome', 'usuario', 'usu_codigo = '.$aluno);
        $banca     = $mysqli->real_escape_string($_POST['banca']);
        $detalhe   = $mysqli->real_escape_string($_POST['detalhe']);
        $data      = $mysqli->real_escape_string($_POST['data']);
        $data      = date('d/m/Y', strtotime($data));
        $hora      = $mysqli->real_escape_string($_POST['hora']);
        $hora      = date('H:i', strtotime($hora));
        $local     = $mysqli->real_escape_string($_POST['local']);
        $descricao = $mysqli->real_escape_string($_POST['descricao']);
        $orientadorNome = $alunoNome = BuscaDado('usu_nome', 'usuario', 'usu_codigo = '.$aluno);
    }
?>
<!-- main -->
 

 <div class="band">
        <div class="container">
          
        <form id="buscaUsuario" action="busca-usuario.php" method="post"> 
        <fieldset class="bordered rounded shadowed margin-bottom"> 
                <legend class="h3 primary text-shadowed no-margin-bottom">Dados do Aluno e TGSI</legend>
                   <div class="row">
                        <div class="span5">
                            <span class="label">Aluno</span><br>
                            <label for="nome_aluno"><?php echo $alunoNome; ?></label>
                        </div>
                        
                        <div class="span2">
                            <span class="label">Tipo de Avaliação</span></span><br>
                            <label for="tipo_avaliacao"><?php echo $tipoNome; ?></label>
                        </div>
                       
                        <div class="span2">
                            <span class="label">Data e Hora<span ></span></span><br>
                            <label for="data"><?php echo $data.' - '.$hora; ?></label>
                        </div>
                           <div class="span3">
                           <span class="label">Professor(Orientador)</span> <br>
                           <label for="data"><?php echo $orientadorNome; ?></label>
                           </div>
                    </div>

                    <div class="row">
                        <div class="span9">
                            <span class="label">Título do TGSI</span>
                            <br><br>
                            <label for="tipo_avaliacao">
                                <?php echo $descricao; ?>
                                <a class="btn link" href="#myUrl">Download do arquivo</a>
                            </label> 
                        </div>
                            
                        <div class="span3">
                            <span class="label">Local</span><br>
                            <label for="data"><?php echo $local; ?></label>    
                        </div>
                    </div>
                    
            </fieldset>             
                <!-- tabela de Avaliacao -->
               
                    <table class="bordered rounded diced striped hovered shadowed narrow table">
                       <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Avaliação do TGSI 1</h2>
                        <thead class="header"> <tr>
                                <th> Critério</th> 
                                <th WIDTH="120">Nota Atribuída</th> 
                                <th WIDTH="90">Peso</th> </tr> </thead>
                        <tbody>
                            <tr>
                                <td>Motivacao e/ou justificativa </td>
                                <td>1,0</td> 
                                <td> <input class="textfield width-4em" type=number id="nota" name="nota"></td>
                            </tr> 
                            
                            <tr>
                                <td >Redação adequada do artigo (ortografia, gramática)</td>
                            <td> 0,5</td> 
                            <td> <input class="textfield width-4em" type=number id="nota" name="nota" > </td>
                            </tr> 
                             <tr>
                                 
                                <td>Formatacão do artigo adequada (normas científicas)</td>         
                                <td>0,5</td> 
                                <td><input class="textfield width-4em" type=number id="nota" name="nota" ></td>
                            </tr>
                            <tr>
                                <td>Coerência na fundamentação, metodologia e desenvolvimento da produção com a temática estabelecida e objetivos propostos</td>
                                <td>4,0</td>    
                                <td><input class="textfield width-4em" type=number id="nota" name="nota" > </td>
                            </tr>
                            <tr>
                                <td>Resultados compatíveis com os previstos no cronograma estabelecido na proposta do TGSI</td>
                                <td>1,0 </td>     
                                <td><input class="textfield width-4em" type=number id="nota" name="nota" ></td>
                            </tr>
                            <tr>
                                <td>Cumprimento das atividades definidas na proposta do TGSI</td>
                                <td>1,0 </td>     
                                <td><input class="textfield width-4em" type=number id="nota" name="nota" ></td>
                            </tr>
                            <tr>
                                <td>Apresentação perante a banca</td>
                                <td>2,0 </td>     
                                <td><input class="textfield width-4em" type=number id="nota" name="nota" > </td>
                            </tr>                            
                        </tbody>
                    </table>
                <br>
                <div class="span11,1"> <span class="label">Parecer Descritivo Opcional</span>  <br>
                    <div class=""><textarea id="justificativa" name="justificativa" class="textarea" rows="5"></textarea><ul class="list-h inner-separated pull-right"><li>Restam 1024 caracteres</li><li>Caracteres: 0</li><li>Palavras: 0</li></ul></div>
                    <span id="contadorParecer"></span>  
                </div>

                <div class="row">
                    <div class="span4">
                        <span class="label">Grau Final Atribuído:</span> <label for="data">APROVADO</label>  
                    </div>
                </div>


                <div class="form-actions">

                    <button class="btn left cancelBtn" id="cancelar" name="cancel" type="button" onclick="parent.location='index.php'">
                        <i class="icon-ban-circle"></i> Cancelar</button>
                    <button class="btn left Reset" id="limpar" name="limpar" type="reset">
                        <i class="icon-eraser"></i> Limpar</button>
                    <button class="btn primary saveBtn" id="Salvar" name="save" type="submit">
                        <i class="icon-save"></i> Salvar</button>
                    <button class="btn right primary" id="Enviar" name="enviar" type="button">
                        <i class="icon-mail-forward"></i> Enviar</button>
                </div> 

        </form>                               

        </div>
          
                                    
<?php include("../rodape.php"); 
  

