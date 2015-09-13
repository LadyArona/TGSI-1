<?php
    include("../restrito.php");
    include("cabecalho.php");
    include("../navbar.php");
    include("navbar_coordenador.php");
?>

    <!-- main -->
    <div class="band">
        <div class="container">
            <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Pesquisa de Banca</h2>
            
            <div class="box shadowed bordered rounded">
                <div class="row">
                    <h3 class="text-shadowed stroked-bottom">Buscar Turma</h3>
                </div>
                <!--Caixa de busca-->
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
                        <option value="101">1. Semestre</option>
                        <option value="102">2. Semestre</option>
                    </select>
                    </div>
                    <div class="span2"> 
                        <label class="label" for="ano">Matrícula do Aluno<span class="required"></span></label>
                        <br >
                        <input id="ano" name="ano" class="textfield width-100 integer" type="text" value=""/>  
                    </div>  
                    <div class="span2">
                        <label class="label" for=""></label><br >
                        <button id="search-btn1" type="button" class="btn primary small" onclick="buscaRegistro();">
                            <i class="icon-search"></i> Buscar
                        </button> 
                    </div>
                </div>
                <!--FIM Caixa de busca-->
            </div>
            <br>           
            <!--Formulário-->
            <form id="insereUsuario" action="" method="post">
                <div class="box shadowed bordered rounded">
                    <div class="row">
                        <div class="span4">
                            <span class="label">Aluno<span class="required"></span></span><br>
                            <select class="textfield width-100" id="aluno" name="situacao" required>
                                <option value=""></option>
                                <option value="1">Aluno 1</option>
                                <option value="2">Aluno 2</option>
                                <option value="2">Aluno 3</option>
                            </select>
                        </div>
                        <div class="span4">
                            <span class="label">Tipo<span class="required"></span></span><br>
                            <select class="textfield width-100" id="situacao" name="situacao" required>
                                <option value="1">1. TGSI 1</option>
                                <option value="2">2. TGSI 2</option>
                              </select>
                        </div>
                       
                        <div class="span4">
                            <span class="label">Data<span class="required"></span></span><br>
                            <input id="data" name="data" class="textfield width-100" type="date" maxlength="150" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="span8">
                            <span class="label">Descrição<span class="required"></span></span><br>
                            <input id="nome" name="nome" class="textfield width-100" type="text" maxlength="150" required>
                        </div>

                        <div class="span4">
                            <span class="label">Situação<span class="required"></span></span><br>
                            <select class="textfield width-100" id="situacao" name="situacao" required>
                                <option value="0">Ativo</option>
                                <option value="1">Inativo</option>
                              </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span12">
                            <span class="label">Local<span class="required"></span></span><br>
                            <input id="nome" name="nome" class="textfield width-100" type="text" maxlength="150" required>
                        </div>
                    </div>
                </div>
                <br>
                
                <!-- tabela de alunos -->
                <div class="bordered rounded diced striped hovered shadowed narrow table">
                    <table class="bordered rounded diced striped hovered shadowed narrow table">
                        <caption>Participantes da Banca</caption>
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
        </div>
    </div>

<?php
	include("../rodape.php");
?>