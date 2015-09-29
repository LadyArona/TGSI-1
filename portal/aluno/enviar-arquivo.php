<?php
    include("../restrito.php");
    include("cabecalho.php");
    include("../navbar.php");
    include("navbar_aluno.php");
    
    $tipo = $_POST['tipo'];
<<<<<<< HEAD
?>
=======
 ?>
     
<!--       <div class="band">
            <div class="container">
                <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Envio de arquivo para orientador</h2>
                <form name=insereArquivo" enctype="multipart/form-data" id="insereArquivo" action="recebe_arquivo.php" method="post" >   Monta formulário com campos do arquivo
                    <div class="row"> 
                        <div class="span12"> <span class="label">Observações</span><br>
                            <div class="row">
                             
                                     <SCRIPT LANGUAGE="JavaScript">
>>>>>>> origin/master

<script type="text/javascript">
function blocTexto(valor)
{
    quant = 1024;
    total = valor.length;
    if(total <= quant)
    {
        resto = quant - total;
        document.getElementById('cont').innerHTML = resto;
    }
    else
    {
        document.getElementById('texto').value = valor.substr(0,quant);
    }
}
</script>

<!-- main -->
<div class="band">
    <div class="container">
        <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Envio de arquivo <?php echo $tipo; ?> para orientador</h2>
        <form id="formOcorrencia" action="arquivo-upload.php" method="POST" enctype="multipart/form-data">
            <div class="row"> 
                <div class="span12"> 
                    <span class="label">Observações</span><br>
                    <div class="">
                        <textarea onkeyup="blocTexto(this.value)" id="texto" name="texto" class="textarea" rows="5" maxlength="1024"></textarea>
                        <ul class="list-h inner-separated pull-right">
                            <li>Restam <span id="cont">1024</span> caracteres</li>
                        </ul>
                    </div>  
                </div>
            </div>
            <fieldset class="bordered rounded shadowed margin-bottom"> 
            <div class="row"> 
                <div>
                    É possível anexar documentos e enviar para seu orientador. <br> 
                    <strong>Tamanho arquivos:</strong> 2 Mb por arquivo. <br> 

<<<<<<< HEAD
                    <table id="tableAnexos" class="table bordered rounded shadowed striped stroked narrow">
                        <thead class="header"> 
                            <tr>                   
                                <th>
                                    <input type="file" name="arquivo" id="arquivo" class="padding-v"/>
                                </th> 
                            </tr> 
                        </thead>
                    </table>
                </div>
            </div>
            </fieldset> 
            <div class="form-actions bottom">
                <button id="cancel" type="button" class="btn left" onclick="parent.location='index.php'">
                    <i class="icon-ban-circle"></i> Cancelar
                </button>
                <button id="salvar" type="Submit" class="btn primary">
                    <i class="icon-save"></i> Enviar
                </button>
            </div>
        </form>
    </div>
</div>
<?php include("../rodape.php"); ?>  
=======
                                    </script>                                                              
                           
                                <textarea  name="obs" class="textarea" rows="5" onKeyDown="textCounter(this.form.obs,this.form.remLen,1024);" onKeyUp="textCounter(this.form.obs,this.form.remLen,1024);"></textarea>  
                             <ul class="list-h inner-separated pull-right">
                                 <li>Restam &nbsp;<input type=label name=remLen size=3 maxlength=3 value="1024" class="borderless" style="border: none;"> caracteres</li>                                                                                           
                             </ul>
                         </div>
                        <span id="contadorcaracter"></span>  
                    </div>-->
<script type="text/javascript">
function blocTexto(valor)
{
    quant = 1024;
    total = valor.length;
    if(total <= quant)
    {
        resto = quant - total;
        document.getElementById('cont').innerHTML = resto;
    }
    else
    {
        document.getElementById('texto').value = valor.substr(0,quant);
    }
}
</script>

<!-- main -->
<div class="band">
    <div class="container">
        <h2 class="primary stroked-bottom text-shadowed margin-bottom "> Envio de arquivo <?php echo $tipo; ?> para orientador</h2>
        <form id="formOcorrencia" action="arquivo-upload.php" method="POST" enctype="multipart/form-data">
            <div class="row"> 
                <div class="span12"> 
                    <span class="label">Observações</span><br>
                    <div class="">
                        <textarea onkeyup="blocTexto(this.value)" id="texto" name="texto" class="textarea" rows="5" maxlength="1024"></textarea>
                        <ul class="list-h inner-separated pull-right">
                            <li>Restam <span id="cont">1024</span> caracteres</li>
                        </ul>
                    </div>  
                 </div>
<!--                <fieldset class="bordered rounded shadowed margin-bottom"> 
                    <div class="row"> 
                        <div> Envie o arquivo no formato .pdf <br> 
                            <strong>Tamanho arquivos:</strong> 10 Mb. <br>                    
                    <table id="tableAnexos" class="table bordered rounded shadowed striped stroked narrow">
                        <thead class="header"> 
                            <tr> 
                                <th> <br> 
                                    <input type="file" name="arquivo" id="arquivo" /> <br>
                                    <input type="hidden" name="MAX_SIZE_FILE" value="10000000" /> <br>   evita que o usuario espere seu carregamento no servidor para saber que é válido
                                </th> 
                            </tr> 
                        </thead> 
                    </table> 
                </fieldset>   
                <div class="form-actions bottom">
                    <button id="cancel" type="button" class="btn left"><i class="icon-ban-circle"></i> Cancelar</button>
                    <button id="salvar" type="file" class="btn primary" name="arquivo" ><i class="icon-save"></i> Salvar</button>
                    <button id="Enviar" type="submit" class="btn primary" name="Enviar"><i class="icon-mail-forward"></i> Enviar</button>
                </div>-->
<!--  </div>-->
            <fieldset class="bordered rounded shadowed margin-bottom"> 
            <div class="row"> 
                <div>
                    É possível anexar documentos e enviar para seu orientador. <br> 
                    <strong>Tamanho arquivos:</strong> 2 Mb por arquivo. <br> 
<!--
            </form>
        </div>
    </div>
   -->

<table id="tableAnexos" class="table bordered rounded shadowed striped stroked narrow">
                        <thead class="header"> 
                            <tr>                   
                                <th>
                                    <input type="file" name="arquivo" id="arquivo" class="padding-v"/>
                                </th> 
                            </tr> 
                        </thead>
                    </table>
                </div>
           </div>
            </fieldset> 
            <div class="form-actions bottom">
                <button id="cancel" type="button" class="btn left" onclick="parent.location='index.php'">
                    <i class="icon-ban-circle"></i> Cancelar
                </button>
                <button id="salvar" type="Submit" class="btn primary">
                    <i class="icon-save"></i> Enviar
                </button>
            </div>
        </form>
    </div>
</div>
<?php include("../rodape.php"); ?> 
>>>>>>> origin/master
