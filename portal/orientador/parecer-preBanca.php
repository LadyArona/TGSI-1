<?php
    //Define a p�gina como sendo do coordenador para uso restrito
    session_start();
    $_SESSION['categoriaPagina'] = 2;
    include("../restrito.php");
    include("cabecalho.php");
    include("../navbar.php");
    include("./navbar_orientador.php");
?>

 <div class="band">
        <div class="container">
          
        <form id="buscaUsuario" action="busca-usuario.php" method="post"> 
        <fieldset class="bordered rounded shadowed margin-bottom"> 
                <legend class="h3 primary text-shadowed no-margin-bottom">Parecer TGSI</legend>
                   <div class="row">
                        <div class="span5">
                            <span class="label">Aluno</span><br>
                            <label for="nome_aluno">Julia da Silva Antunes Almeida</label>
                        </div>
                                                                                                                        
                    </div>

                    <div class="row">
                        <div class="span9">
                            <span class="label">T�tulo do TGSI</span> <br>
                            <label for="tipo_avaliacao">Problemas Enfrentados pelos Sistemas Especialistas Atuais <a class="btn link" href="#myUrl">Download do arquivo</a></label> 
                        </div>           
                    </div>
                
                <table class="bordered rounded diced striped hovered shadowed narrow table">
                       
                        <thead class="header"> <tr>
                                <th> Crit�rio</th> <th WIDTH="120">Peso</th> <th WIDTH="90">Nota atribu�da</th> </tr> </thead>
                        <tbody>
                            <tr>
                                <td> Participa��o do aluno nos encontros para orienta��o </td>
                                <td>1,5</td> 
                                <td>  <input class="textfield width-4em" type=number value="1.5" id="nota" name="nota">   </td>
                            </tr> 
                            
                            <tr>
                                <td>Autonomia na condu��o dos trabalhos</td>
                            <td> 1</td> 
                            <td> <input class="textfield width-4em" type=number value="1" id="nota" name="nota" > </td>
                            </tr> 
                             <tr>
                                 
                                <td>Cumprimento das atividades propostas</td>         
                                <td>1</td> 
                                <td><input class="textfield width-4em" type=number value="1"id="nota" name="nota" ></td>
                            </tr>
                            <tr>
                                <td>Utiliza��o de linguagem acad�mica adequada</td>
                                <td>1,5</td>    
                                <td><input class="textfield width-4em" type=number value="1" id="nota" name="nota" > </td>
                            </tr>
                            <tr>
                                <td>Utiliza��o das normas para formata��o do artigo recomendadas</td>
                                <td>0,5 </td>     
                                <td><input class="textfield width-4em" type=number value="0.5"id="nota" name="nota" ></td>
                            </tr>
                            <tr>
                                <td>Produ��o compat�vel com aquela prevista no cronograma estabelecido na proposta do TGSI</td>
                                <td>0,5 </td>     
                                <td><input class="textfield width-4em" type=number value="0.5" id="nota" name="nota" ></td>
                            </tr>
                            <tr>
                                <td>Coer�ncia na fundamenta��o, metodologia e desenvolvimento da produ��o com a tem�tica estabelecida e objetivos propostos</td>
                                <td>4 </td>     
                                <td><input class="textfield width-4em" type=number value="3.9" id="nota" name="nota" > </td>
                            </tr>
                            
                             <tr>
                                <td><strong>Nota Final</></td>
                                <td><strong>10</> </td>     
                                <td><span class="label"><strong> 9,4 </>  </span><br></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </fieldset>   
            
            
                            <br>
                
                <div class="row">
                    <div class="span4">
                        <span class="label">Parecer:</span> <label>Favor�vel a Defesa</label>  
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