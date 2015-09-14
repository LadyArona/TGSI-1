<?php
    include("../restrito.php");
    include("cabecalho.php");
    include("../navbar.php");
    include("navbar_aluno.php");
?>

    <!-- main -->
    <div class="band">
        <div class="container">
            <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Envio de arquivo para orientador</h2>
           
          
            <form id="formOcorrencia" action="/aluno/alteracao-curricular/trancamentoTotal.html" method="post" enctype="multipart/form-data"><div class="row"> 
                    <div class="span12"> <span class="label">Observação</span>
<br>
 <div class=""><textarea id="justificativa" name="justificativa" class="textarea" rows="5"></textarea><ul class="list-h inner-separated pull-right"><li>Restam 1024 caracteres</li><li>Caracteres: 0</li><li>Palavras: 0</li></ul></div>
 <span id="contadorJustificativa"></span>  
                    </div>
                </div>
              
                
                <fieldset class="bordered rounded shadowed margin-bottom"> 
                    <div class="row"> 
                        <div> É possível anexar documentos e enviar para seu orientador. <br> <strong>Tamanho arquivos:</strong> 10 Mb por arquivo. <br> 
                           
                    <legend class="bold">Anexos</legend> 
                    
                    <table id="tableAnexos" class="table bordered rounded shadowed striped stroked narrow">
                        <thead class="header"> <tr> 
                                <th style="width: 3em;">#</th> <th style="width: 7em;">
                                    <button id="addBtn" type="button" class="btn small inverse">+</button>
                                </th> <th>Descrição</th> </tr> </thead> <tbody>  
                        </tbody> 
                    </table> </fieldset>                                        
                
                <div class="form-actions bottom">
                    <button id="cancel" type="button" class="btn left">
                        <i class="icon-ban-circle"></i> Cancelar</button>
     <button id="salvar" type="button" class="btn primary" data-hasqtip="2">
         <i class="icon-save"></i> Enviar</button> </div></form>
            
           

<?php
	include("../rodape.php");
?>  