<?php
    //Define a página como sendo do coordenador para uso restrito
    session_start();
    $_SESSION['categoriaPagina'] = 1;
    include("../restrito.php");
    include("cabecalho.php");
    include("../navbar.php");
     include("../include/funcoes.php");
    include("navbar-coordenador.php");
   ?>

    <div class="band">
            <div class="container">
                <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Cadastro de Banca</h2>
            <!--Inicio Caixa de busca Banca-->   
                    <form id="insereUsuario" action="banca-seg.php" method="post">
                        <div class="box shadowed bordered rounded">
                            <div class="row"> 
                                <div class="span2"> 
                                    <label class="label" for="ano">Ano<span class="required"></span></label>
                                        <br>
                                        <input id="ano" name="ano" class="textfield width-100 integer" type="text" value=""/>  
                                </div> 
                                <div class="span3"> 
                                    <span class="label">Período<span class="required"></span></span>
                                        <br>
                                        <select id="periodo" name="periodo" class="textfield width-100"> 
                                            <option value="101">1. Semestre</option>
                                            <option value="102">2. Semestre</option>
                                        </select>
                                </div>
                                
                                 <div class="span2">
                                     <label class="label" for=""></label><br >
                                     <button id="buscaBanca" type="submit" class="btn primary small">
                                        <i class="icon-edit"></i> Cadastrar
                                     </button> 
                                 </div>
                            </div>
                            
                            <!--FIM Caixa de busca-->
                        </div>
                    </form>
                        <br> 
 <!-- tabela de alunos -->
                <div class="bordered rounded diced striped hovered shadowed narrow table">
                    <table class="bordered rounded diced striped hovered shadowed narrow table">
                        <caption>Alunos cadastrados</caption>
                        <thead class="header"> <tr><th WIDTH="80"></th> <th>Participante</th> <th class="hidden-tablet">Categoria</th> </tr> </thead>
                        <tbody>
                            <tr>
                                <td WIDTH="80">
                                    <div class="btn-group mini">
                                        <button type="button" class="btn"><i class="icon-edit"></i></button>
                                        <button type="button" class="btn large"><i class="icon-trash"></i></button>
                                    </div>
                                </td>
                                <td>Professor 1</td> 
                                <td class="hidden-tablet">Coordenador</td>
                            </tr>
                            
                            <tr>
                                <td WIDTH="80">
                                    <div class="btn-group mini">
                                        <button type="button" class="btn"><i class="icon-edit"></i></button>
                                        <button type="button" class="btn large"><i class="icon-trash"></i></button>
                                    </div>
                                </td>
                                <td>Professor 2</td> 
                                <td class="hidden-tablet">Orientador</td>
                            </tr>
                            
                            <tr>
                                <td WIDTH="80">
                                    <div class="btn-group mini">
                                        <button type="button" class="btn"><i class="icon-edit"></i></button>
                                        <button type="button" class="btn large"><i class="icon-trash"></i></button>
                                    </div>
                                </td> 
                                <td>Professor 3</td> 
                                <td class="hidden-tablet">Avaliador</td>
                            </tr>
                            <tr>
                                <td WIDTH="80">
                                    <div class="btn-group mini">
                                        <button type="button" class="btn"><i class="icon-edit"></i></button>
                                        <button type="button" class="btn large"><i class="icon-trash"></i></button>
                                    </div>
                                </td> 
                                <td>Professor 4</td> 
                                <td class="hidden-tablet">Avaliador</td>
                            </tr>
                            <tr>
                                <td WIDTH="80">
                                    <div class="btn-group mini">
                                        <button type="button" class="btn"><i class="icon-edit"></i></button>
                                        <button type="button" class="btn large"><i class="icon-trash"></i></button>
                                    </div>
                                </td> 
                                <td>Professor 5</td> 
                                <td class="hidden-tablet">Avaliador</td>
                            </tr>
                        </tbody>
                    </table>

                <div id="paginationWrapper"> 
                <table class="bordered rounded diced striped hovered shadowed narrow table"> 
                    <thead class="header"> 
                        <tr> 
                            <th WIDTH="150">Buscar</th> 
                            <th WIDTH="150">Matrícula</th> 
                            <th>Nome</th> 
                            <th>Orientador</th> 
                            <th>Coorientador</th> 
                            <th WIDTH="100">Título TGSI</th> 
                        </tr> 
                    </thead> 
                    
                    <tbody> 
                        <tr data-role="tableRow" data-id=""> 
                            <td 
                                <div class="btn-group mini">
                                        <button type="button" class="btn"><i class="icon-edit"></i></button>
                                </div></td> 
                            <td WIDTH="150">201509013</td>
                            <td>Nome do Aluno1</td> 
                            <td>Orientador Aluno</td> 
                            <td>Coorientador Aluno</td> 
                            <td WIDTH="100">Titulo TGSI</td> 
                        
                    </tr>
                        <tr data-role="tableRow" data-id=""> 
                            <td 
                                <div class="btn-group mini">
                                        <button type="button" class="btn"><i class="icon-edit"></i></button>
                                </div></td> 
                            <td WIDTH="150">208969013</td>
                            <td>Nome do Aluno2</td> 
                            <td>Orientador Aluno</td> 
                            <td>Coorientador Aluno</td> 
                            <td WIDTH="100">Titulo TGSI</td> 
                        </tr>
                        
                        <tr data-role="tableRow" data-id=""> 
                            <td 
                                <div class="btn-group mini">
                                        <button type="button" class="btn"><i class="icon-edit"></i></button>
                                </div></td> 
                            <td WIDTH="100">201509013</td>
                            <td>Nome do Aluno3</td> 
                            <td>Orientador Aluno</td> 
                            <td>Coorientador Aluno</td> 
                            <td WIDTH="150">Titulo TGSI</td> 
                        </tr>
                    </tbody> 
                </table> 
            </div>                    
                </div>
 
 
 