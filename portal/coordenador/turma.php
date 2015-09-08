<?php
    include("../restrito.php");
    include("cabecalho.php");
    include("../navbar.php");
    include("navbar_coordenador.php");
?>

    <!-- main -->
    <div class="band">
        <div class="container">
            <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Cadastro de Turma</h2>
            <!--Caixa de busca-->
            <div class="row">
                <div class="row large-margin-top"> 
                    <div class="span4"> 
                        <label class="label" for="numeroControle">Ano</label>
                        <br >
                        <div class="input-append width-100"> 
                            <div class="addon-wrapper"> 
                                <button id="search-btn1" type="button" class="btn primary small" onclick="buscaRegistro();">
                                    <i class="icon-search"></i> Buscar
                                </button> 
                            </div> 
                            <div class="input-wrapper"> 
                                <input id="numeroControle" type="search" name="numeroControle" class="textfield"/> 
                            </div>
                        </div> 
                        <span id="registroErro" class="pill error" style="display: none;"></span> 
                    </div>
                    
                    <div class="span4"> 
                        <label class="label" for="numeroControle">Semestre</label>
                        <br >
                        <div class="input-append width-100"> 
                            <div class="addon-wrapper"> 
                                <button id="search-btn1" type="button" class="btn primary small" onclick="buscaRegistro();">
                                    <i class="icon-search"></i> Buscar
                                </button> 
                            </div> 
                            <div class="input-wrapper"> 
                                <input id="numeroControle" type="search" name="numeroControle" class="textfield"/> 
                            </div>
                        </div> 
                        <span id="registroErro" class="pill error" style="display: none;"></span>
                    </div>
                </div>
            </div>
            <br>           
            <!--Formulário-->
            <form id="insereUsuario" action="insere-usuario.php" method="post">
                <div class="box shadowed bordered rounded">
                    <div class="row">
                        <div class="span4">
                            <span class="label">Ano<span class="required"></span></span><br>
                            <input id="ano" name="ano" class="textfield width-100" type="text" maxlength="150" required>
                        </div>
                        <div class="span4">
                            <span class="label">Período<span class="required"></span></span><br>
                            <select class="textfield width-100" id="situacao" name="situacao" required>
                                <option value="1">1. Semestre</option>
                                <option value="2">2. Semestre</option>
                              </select>
                        </div>
                       
                        <div class="span4">
                            <span class="label">Data de entrega<span class="required"></span></span><br>
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
                </div>
                <br>
                
                <!-- tabela de alunos -->
                <div class="bordered rounded diced striped hovered shadowed narrow table">
                    <table class="bordered rounded diced striped hovered shadowed narrow table">
                        <caption>Alunos da turma</caption>
                        <thead class="header"> <tr><th WIDTH="80"></th> <th>Aluno</th> <th class="hidden-tablet">Orientador</th> <th class="hidden-tablet">Coorientador</th> </tr> </thead>
                        <tbody>
                            <tr>
                                <td WIDTH="80">
                                    <div class="btn-group mini">
                                        <button type="button" class="btn"><i class="icon-edit"></i></button>
                                        <button type="button" class="btn large"><i class="icon-trash"></i></button>
                                    </div>
                                </td>
                                <td>Aluno 1-1</td> 
                                <td class="hidden-tablet">Orientador 1-2</td> 
                                <td class="hidden-tablet">Coorientador 1-3</td> 
                            </tr>
                            
                            <tr>
                                <td WIDTH="80">
                                    <div class="btn-group mini">
                                        <button type="button" class="btn"><i class="icon-edit"></i></button>
                                        <button type="button" class="btn large"><i class="icon-trash"></i></button>
                                    </div>
                                </td>
                                <td>Aluno 2-1</td> 
                                <td class="hidden-tablet">Orientador 2-2</td> 
                                <td class="hidden-tablet"> </td> 
                            </tr>
                            
                            <tr>
                                <td WIDTH="80">
                                    <div class="btn-group mini">
                                        <button type="button" class="btn"><i class="icon-edit"></i></button>
                                        <button type="button" class="btn large"><i class="icon-trash"></i></button>
                                    </div>
                                </td> 
                                <td>Aluno 3-1</td> 
                                <td class="hidden-tablet">Orientador 3-2</td> 
                                <td class="hidden-tablet">Coorientador 3-3</td> 
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