<?php
    include("../restrito.php");
    include("cabecalho.php");
    include("../navbar.php");
    include("./navbar_aluno.php");
?>
<!-- main -->
<div class="band">
    <div class="container">
        <h2 class="primary stroked-bottom text-shadowed margin-bottom">Resultado da Avalia��o da Proposta de TGSI</h2><br>
        <form id="buscaUsuario" action="busca-usuario.php" method="post"> 
            <fieldset class="bordered rounded shadowed margin-bottom"> 
                <legend class="h3 primary text-shadowed no-margin-bottom">Dados do Aluno e TGSI</legend>
                <div class="row">
                    <div class="span5">
                        <span class="label">Aluno</span><br>
                        <label for="nome_aluno">Julia da Silva Antunes Almeida</label>
                    </div>

                    <div class="span2">
                        <span class="label">Tipo de Avalia��o</span></span><br>
                        <label for="tipo_avaliacao">Proposta de TGSI</label>
                    </div>

                    <div class="span2">
                        <span class="label">Data<span ></span></span><br>
                        <label for="data">15/03/2016</label>
                    </div>
                    <div class="span3">
                       <span class="label">Professor(Orientador)</span> <br>
                        <label for="data">Cristiano Bertolini</label>
                    </div>
                </div>

                <div class="row">
                    <div class="span9">
                        <span class="label">T�tulo da Proposta</span> <br>
                         <label for="tipo_avaliacao">Problemas Enfrentados pelos Sistemas Especialistas Atuais <a class="btn link" href="#myUrl">Download do arquivo</a></label> 
                    </div>

                    <div class="span3">
                      <span class="label">Local</span><br>
                      <label for="data">UFSM|FW - Labor�torio de Software</label>    
                    </div>
                </div>
            </fieldset>             
                <!-- tabela de Avaliacao -->
               
            <table class="bordered rounded diced striped hovered shadowed narrow table">
                <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Avalia��o da Proposta</h2>
                <thead class="header"> 
                    <tr>
                        <th> Crit�rio</th> 
                        <th WIDTH="120">Nota Atribu�da</th> 
                        <th WIDTH="90">Peso</th> 
                    </tr> 
                </thead>
                <tbody>
                    <tr>
                        <td>Motivacao e/ou justificativa </td>
                        <td>2,0</td> 
                        <td> <input class="textfield width-4em disabled" type=number id="nota" name="nota"value="1.5" disabled></td>
                    </tr> 

                    <tr>
                        <td >Reda��o adequada do artigo (ortografia, gram�tica)</td>
                        <td> 0,5</td> 
                        <td> <input class="textfield width-4em" type=number id="nota" name="nota" value="0.4" disabled></td>
                    </tr> 
                    <tr>

                        <td>Formatac�o do artigo adequada (normas cient�ficas)</td>         
                        <td>0,5</td> 
                        <td><input class="textfield width-4em" type=number id="nota" name="nota" value="0.3" disabled></td>
                    </tr>
                    <tr>
                        <td>Coer�ncia na fundamenta��o, metodologia e desenvolvimento da produ��o com a tem�tica estabelecida e objetivos propostos</td>
                        <td>4,0</td>    
                        <td><input class="textfield width-4em" type=number id="nota" name="nota" value="3.7" disabled></td>
                    </tr>
                    <tr>
                        <td>Resultados compat�veis com os previstos no cronograma estabelecido na proposta do TGSI</td>
                        <td>1,0 </td>     
                        <td><input class="textfield width-4em" type=number id="nota" name="nota" value="0.5" disabled></td>
                    </tr>
                    <tr>
                        <td>Cumprimento das atividades definidas na proposta do TGSI</td>
                        <td>1,0 </td>     
                        <td><input class="textfield width-4em" type=number id="nota" name="nota" value="0.6" disabled></td>
                    </tr>
                    <tr>
                        <td>Apresenta��o perante a banca</td>
                        <td>2,0 </td>     
                        <td><input class="textfield width-4em" type=number id="nota" name="nota" value="1.9" disabled></td>
                    </tr>

                    <tr>
                        <td>Nota Final</td>
                        <td>  </td>     
                        <td><span class="label"> </span><br></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <div class="span11,1"> 
                <span class="label">Parecer Descritivo Opcional</span>
                <br>
                <div class="">
                    <textarea id="justificativa" name="justificativa" class="textarea" rows="5">
At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</textarea>
                    <ul class="list-h inner-separated pull-right">
                        <li>Restam 1024 caracteres</li>
                        <li>Caracteres: 0</li><li>Palavras: 0</li>
                    </ul>
                </div>
                <span id="contadorParecer"></span>  
            </div>

            <div class="row">
                <div class="span4">
                    <span class="label">Grau Final Atribu�do:</span> 
                    <span class="label success">APROVADO</span>  
                </div>
            </div>                            
            <div class="form-actions">
                <button class="btn left cancelBtn" id="cancelar" name="cancel" type="button" onclick="parent.location='index.php'">
                    <i class="icon-arrow-left"></i> Voltar</button>
            </div>
        </form>
    </div> 
 </div>
<?php include("../rodape.php"); 
  
