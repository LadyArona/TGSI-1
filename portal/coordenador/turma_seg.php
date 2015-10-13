<?php
    include("../restrito.php");
    include("cabecalho.php");
    include("../navbar.php");
    include("navbar-coordenador.php");
    include("../include/funcoes.php")
?>

<div class="band">
        <div class="container">
            <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Cadastro de Turma</h2>
                    <!--Formulário-->
                    <form id="insereTurma" action="insere_turma.php" method="post">
                <div class="box shadowed bordered rounded">
                    <div class="row">
                        <div class="span4">
                            <span class="label">Ano<span class="required"></span></span><br>
                            <input id="ano" name="ano" class="textfield width-100" type="year" maxlength="150" required>
                        </div>
                        <div class="span4">
                            <span class="label">Período<span class="required"></span></span><br>
                            <select class="selectfield" id="semestre" name="semestre" required>
                                <option value="1">1. semestre</option>
                                <option value="2">2. semestre</option>
                              </select>
                        </div>
                       
                        <div class="span4">
                            <span class="label">Data de entrega<span class="required"></span></span><br>
                            <input id="data_proposta" name="data_proposta" class="textfield width-100" type="date" maxlength="150" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="span12">
                            <span class="label">Descrição<span class="required"></span></span><br>
                            <input id="descricao" name="descricao" class="textfield width-100" type="text" maxlength="150" required>
                        </div>

                    </div>
                </div>
                <br>
                
<?php
	include("../rodape.php");
?>