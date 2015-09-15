<?php
    include("../restrito.php");
    include("cabecalho.php");
    include("../navbar.php");
    include("./navbar_avaliador.php");
?>

    <!-- main -->
    <div class="band">
        <div class="container">
            <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Pesquisa de alunos a serem avaliados</h2>
            <!--Formul�rio de busca-->
             <form id="busca-usuario" action="" method="post">            
                <div class="row"> 
                    <div class="span2"> 
                        <label class="label" for="ano">Ano<span class="required"></span></label>
                        <br >
                        <input id="ano" name="ano" class="textfield width-100 integer" type="text" value=""/>  
                    </div> 
                    <div class="span3"> 
                        <span class="label">Per�odo<span class="required"></span></span>
                        <br >
                        <select id="periodo" name="periodo" class="selectfield">
                            <option value="0" selected>0. Todos</option>
                            <option value="1">1. Semestre</option>
                            <option value="2">2. Semestre</option>
                        </select>
                    </div>
                    <div class="span2"> 
                        <label class="label" for="ano">Aluno</label>
                        <br >
                        <select id="aluno" name="aluno" class="selectfield"> 
                            <option value="0" selected>Todos</option>
                            <option value="1">Aluno 1</option>
                            <option value="2">Aluno 2</option>
                            <option value="3">Aluno 3</option>
                            <option value="4">Aluno 4</option>
                        </select> 
                    </div> 
                </div>      

                <div class="form-actions bottom "> 
                    <button class="btn left cancelBtn" id="cancelar" name="cancel" type="button" onclick="parent.location='index.php'">
                        <i class="icon-ban-circle"></i> Cancelar</button>
                    <button class="btn left Reset" id="limpar" name="limpar" type="reset">
                        <i class="icon-eraser"></i> Limpar</button>
                    <button class="btn primary saveBtn" id="salvar" name="save" type="submit">
                        <i class="icon-search"></i> Buscar</button>
                </div>
            </form>
            <!--fim do Formul�rio de busca-->
            
            <!--tabela-->
            <br>
            <div id="paginationWrapper"> 
                <table class="bordered rounded diced striped hovered shadowed narrow table"> 
                    <thead class="header"> 
                        <tr>
                            <th WIDTH="150">Matr�cula</th> 
                            <th>Nome</th> 
                            <th>E-mail</th> 
                            <th>T�tulo do trabalho</th> 
                            <th WIDTH="100"></th> 
                        </tr> 
                    </thead> 
                    
                    <tbody> 
                        <tr data-role="tableRow" data-id="">
                            <td WIDTH="150">20115654</td>
                            <td>Aluno Sobrenome Aluno</td> 
                            <td>aluno@ufsm.com.br</td> 
                            <td>Arquiteturas de ensino a programa��o para crian�as e a integra��o destas com sistemas Lego e Lego Mindstorms.</td> 
                            <td WIDTH="100">
                                <button type="button" class="btn mini primary">Visualizar</button>
                            </td> 
                        </tr>
                        <tr data-role="tableRow" data-id=""> 
                            <td WIDTH="150">2011562</td>
                            <td>Aluno Sobrenome Aluno</td> 
                            <td>aluno2@ufsm.com.br</td> 
                            <td>Desenvolvimento de jogos, bibliotecas gr�ficas e motores de jogos em programa��o funcional</td> 
                            <td WIDTH="100">
                                <button type="button" class="btn mini primary">Visualizar</button>
                            </td> 
                        </tr> 
                        <tr data-role="tableRow" data-id="">
                            <td WIDTH="150">201009013</td>
                            <td>Aluno Sobrenome Aluno</td> 
                            <td>aluno@ufsm.com.br</td> 
                            <td> Neuroci�ncia computacional (modelagem de redes neurais fisiologicamente realistas e / ou modelagem comportamental de processos cognitivos), neuro-imagem, e interfaces c�rebro-m�quina.</td> 
                            <td WIDTH="100">
                                <button type="button" class="btn mini primary">Visualizar</button>
                            </td>  
                        </tr>                         
                    </tbody> 
                </table> 
            </div>
            
        </div>
    </div>

<?php
	include("../rodape.php");
?>