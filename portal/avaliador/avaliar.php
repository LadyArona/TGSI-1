<?php
    include("../restrito.php");
    include("cabecalho.php");
    include("../navbar.php");
    include("navbar_avaliador.php");
?>

    <!-- main -->
    <div class="band">
        <div class="container">
            <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Avaliação do TGSI</h2>
            
            <form id="insereUsuario" action="insere-usuario.php" method="post">
                <div class="row"> 
                    <div class="span2"> 
                        <label class="label" for="ano">Ano<span class="required"></span></label>
                        <br >
                        <input id="ano" name="ano" value="2016" class="textfield width-100 integer" type="text" value=""/>  
                    </div> 
                    <div class="span3"> 
                        <span class="label">Período<span class="required"></span></span>
                        <br >
                        <select id="periodo" name="periodo" class="textfield width-100"> 
                            <option value="101" selected>1. Semestre</option>
                            <option value="102">2. Semestre</option>
                        </select>
                    </div>
                    <div class="span2"> 
                        <label class="label" for="ano">Aluno</label>
                        <br >
                        <select id="aluno" name="aluno" class="textfield width-100" > 
                            <option value="0"> Julia da Silva</option>
                            <option value="1">Aluno 2</option>
                            <option value="2">Aluno 3</option>
                            <option value="3">Aluno 4</option>
                            <option value="4">Aluno 5</option>
                        </select> 
                    </div> 
                </div>               
                               
                 <form id="buscaUsuario" action="busca-usuario.php" method="post">
                <div class="box shadowed bordered rounded">
                    <div class="row">
                        <div class="span6">
                            <span class="label">Aluno</span><br>
                            <input class="textfield width-100" id="aluno" value="Julia da Silva" name="situacao" disabled="">
                        </div>
                        
                        <div class="span4">
                            <span class="label">Avaliação</span></span><br>
                            <input class="textfield width-100" id="avaliação" value="Proposta de TGSI" name="situacao" disabled="">
                        </div>
                       
                        <div class="span2">
                            <span class="label">Data<span ></span></span><br>
                            <input id="data" name="data" class="textfield width-100" value="16/03/2016"type="text"  maxlength="150" disabled="text" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="span6">
                            <span class="label">Título do TGSI</span> <br>
                            <input id="nome" name="nome" class="textfield width-100" value= "Problemas Enfrentados pelos Sistemas Especialistas Atuais" type="text" maxlength="150"disabled="" > 
                        </div>
                        
                            <div class="span2">
                                 <span class="label"></span> <br>
                            <button class="btn mini" id="download" name="download" type="button">
                     
                        <i class="icon-download-alt"></i> Download do arquivo</button>
                            
                        </div>
                                  
                            <div class="span4">
                            <span class="label">Professor(Orientador)</span> <br>
                            <input class="textfield width-100" id="situacao" name="situacao" value="Cristiano Bertolini"disabled="">
                               
                        </div>
                    </div>
                    <div class="row">
                        <div class="span12">
                            <span class="label">Local</span><br>
                            <input id="nome" name="nome" class="textfield width-100" value="UFSM|FW - Laborátorio de Software" type="text" maxlength="150" disabled="">
                        </div>
                    </div>
                </div>
                <br>
                
                <!-- tabela de Avaliacao -->
               
                    <table class="bordered rounded diced striped hovered shadowed narrow table">
                        <caption><h2>Avaliação</h2></caption>
                        <thead class="header"> <tr>
                                <th> Critério</th> <th WIDTH="120">Nota Atribuída</th> <th WIDTH="250">Peso</th> </tr> </thead>
                        <tbody>
                            <tr>
                                <td>Motivacao e/ou justificativa </td>
                                <td>2,0</td> 
                                <td>  <input class="textfield width-15" type=number id="nota" name="nota">   </td>
                            </tr> 
                            
                            <tr>
                                <td >Redação adequada do artigo (ortografia, gramática)</td>
                            <td> 0,5</td> 
                                <td> <input class="textfield width-15" type=number id="nota" name="nota" > </td>
                            </tr> 
                             <tr>
                                 
                                <td>Formatacão do artigo adequada (normas científicas)</td>         
                                <td>0,5</td> 
                                <td><input class="textfield width-15" type=number id="nota" name="nota" ></td>
                            </tr>
                            <tr>
                                <td>Coerência na fundamentação, metodologia e desenvolvimento da produção com a temática estabelecida e objetivos propostos</td>
                                <td>4,0</td>    
                                <td><input class="textfield width-15" type=number id="nota" name="nota" > </td>
                            </tr>
                            <tr>
                                <td>Resultados compatíveis com os previstos no cronograma estabelecido na proposta do TGSI</td>
                                <td>1,0 </td>     
                                <td><input class="textfield width-15" type=number id="nota" name="nota" ></td>
                            </tr>
                            <tr>
                                <td>Cumprimento das atividades definidas na proposta do TGSI</td>
                                <td>1,0 </td>     
                                <td><input class="textfield width-15" type=number id="nota" name="nota" ></td>
                            </tr>
                            <tr>
                                <td>Apresentação perante a banca</td>
                                <td>2,0 </td>     
                                <td><input class="textfield width-15" type=number id="nota" name="nota" ></td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <br>
                        <div class="span11,1"> <span class="label">Parecer Descritivo Opcional</span>
                        <br>
                         <div class=""><textarea id="justificativa" name="justificativa" class="textarea" rows="5"></textarea><ul class="list-h inner-separated pull-right"><li>Restam 1024 caracteres</li><li>Caracteres: 0</li><li>Palavras: 0</li></ul></div>
                         <span id="contadorParecer"></span>  
                        </div>
                    <br>
                    <br>
                        <div class="row">
                        <div class="span2">
                            <span class="label">Grau Final Atribuído</span>
                        </div>
                        <div class="span4">
                            <input class="textfield width-100" value="Aprovado" id="grauFinal" name="grauFinal"disabled=""></span>
                        </div>
                   </div>
                    <br>
                                            
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
    
<?php include("../rodape.php"); ?>
