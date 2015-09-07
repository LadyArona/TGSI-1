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
                <div class="bordered rounded diced striped hovered shadowed narrow table">
                    <table class="bordered rounded diced striped hovered shadowed narrow table">
                        <caption>Alunos da turma</caption>
                        <thead class="header"> <tr><th></th> <th>Aluno</th> <th class="hidden-tablet">Orientador</th> <th>Coorientador</th> </tr> </thead>
                        <tbody>
                            <tr><td>
                                <div class="btn-group mini">
                                    <button type="button" class="btn"><i class="icon-edit"></i></button>
                                    <button type="button" class="btn large"><i class="icon-ban-circle"></i></button>
                                </div>
                                </td> 
                                
                                
                                
                                
                                
                                <td>Aluno 1-1</td> <td class="hidden-tablet">Orientador 1-2</td> <td>Coorientador 1-3</td> </tr>
                            <tr><td>Aluno 1-1</td> <td>Aluno 2-1</td> <td class="hidden-tablet">Orientador 2-2</td> <td> </td> </tr>
                            <tr><td>Aluno 1-1</td> <td>Aluno 3-1</td> <td class="hidden-tablet">Orientador 3-2</td> <td>Coorientador 3-3</td> </tr>
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