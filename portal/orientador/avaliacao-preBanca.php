<?php
    include("../restrito.php");
    include("cabecalho.php");
    include("../navbar.php");
    include("navbar_avaliador.php");
?>

 <table class="bordered rounded diced striped hovered shadowed narrow table">
                       <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Avalia��o da proposta de TGSI</h2>
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

<?php include("../rodape.php"); 