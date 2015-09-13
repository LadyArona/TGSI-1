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
            
            <form id="formAvaliacao" action="" method="post"> 
                <div class="row"> 
                    <div class="span2"> 
                        <label class="label" for="ano">Ano<span class="required"></span></label>
                        <br >
                        <input id="ano" name="ano" class="textfield width-100 integer" type="text" value=""/>  
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
                            <option value="0" Escolher</option>
                            <option value="1">Aluno 1</option>
                            <option value="2">Aluno 2</option>
                            <option value="3">Aluno 3</option>
                            <option value="4">Aluno 4</option>
                        </select> 
                    </div> 
                </div>               
                
                
                 <form id="insereUsuario" action="insere-usuario.php" method="post">
                <div class="box shadowed bordered rounded">
                    <div class="row">
                        <div class="span4">
                            <span class="label">Aluno<span class="required"></span></span><br>
                            <input class="textfield width-100" id="aluno" name="situacao" disabled="">
                              
                        </div>
                        <div class="span4">
                            <span class="label">Avaliação<span class="required"></span></span><br>
                            <input class="textfield width-100" id="avaliação" name="situacao" disabled="">
                                
                        </div>
                       
                        <div class="span4">
                            <span class="label">Data<span ></span></span><br>
                            <input id="data" name="data" class="textfield width-100" type="text"  maxlength="150" disabled="text" >
                        </div>
                    </div>

                    <div class="row">
                        <div class="span8">
                            <span class="label">Título do TGSI</span><br>
                            <input id="nome" name="nome" class="textfield width-100" type="text" maxlength="150"disabled="" >
                        </div>

                        <div class="span4">
                            <span class="label">Professor(Orientador)</span><br>
                            <input class="textfield width-100" id="situacao" name="situacao" disabled="">
                               
                        </div>
                    </div>
                    <div class="row">
                        <div class="span12">
                            <span class="label">Local<span class="required"></span></span><br>
                            <input id="nome" name="nome" class="textfield width-100" type="text" maxlength="150" disabled="">
                        </div>
                    </div>
                </div>
                <br>
                
                <!-- tabela de alunos -->
                <div class="bordered rounded diced striped hovered shadowed narrow table">
                    <table class="bordered rounded diced striped hovered shadowed narrow table">
                        <caption>Notas</caption>
                        <thead class="header"> <tr>Critério<th WIDTH="80"></th> <th>Peso</th> <th class="hidden-tablet">Nota Atribuída</th> </tr> </thead>
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

                </div>
                

                <div class="form-actions">
                    <button class="btn left cancelBtn" id="cancelar" name="cancel" type="button">
                        <i class="icon-ban-circle"></i> Cancelar</button>
                    <button class="btn left Reset" id="limpar" name="limpar" type="reset">
                        <i class="icon-eraser"></i> Limpar</button>
                    <button class="btn primary saveBtn" id="salvar" name="save" type="submit">
                        <i class="icon-save"></i> Salvar</button>
                </div>
            </form>
                
                
                
                
                
                
                
                
                <div class="form-actions bottom ">            
                    <button class="btn primary gerarBtn" id="gerar" name="gerar" type="button">
                        <i class="icon-save"></i> avaliar
                    </button>
                </div>
                <br>
                            
        </div>
    </div>
    
<?php include("../rodape.php"); ?>
