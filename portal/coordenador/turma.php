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
                <form id="buscaTurma" action="busca_turma.php" method="post">
                <div class="row"> 
                    <div class="span2"> 
                        <label class="label" for="ano">Ano<span class="required"></span></label>
                        <br >
                        <input id="ano" name="ano" class="textfield width-100 integer" type="text" value=""/>  
                    </div> 
                    <div class="span3"> 
                        <span class="label">Período<span class="required"></span></span>
                    <br >
                    <select id="periodo" name="periodo" class="selectfield width-100"> 
                        <option value="101">1. Semestre</option>
                        <option value="102">2. Semestre</option>
                    </select>
                    </div> 
                    <div class="span2">
                        <label class="label" for=""></label><br >
                        <button id="search-btn1" type="button" class="btn primary small" onclick="parent.location='turma_seg.php'"> 
                                <!--onclick="buscaRegistro();">-->
                            <i class="icon-search"></i> Buscar
                        </button>                                                                       
                    </div>
                </div>                                                                                             
                </div>
            </form>
        </div>
    </div>

<?php
	include("../rodape.php");
?>