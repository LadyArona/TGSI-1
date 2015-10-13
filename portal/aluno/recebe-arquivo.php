<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    <head>
        <title>Upload de arquivos</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            // verifica se foi enviado um arquivo 
            if(isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0)
            {

                    echo "Voc� enviou o arquivo: <strong>" . $_FILES['arquivo']['name'] . "</strong><br />";
                    echo "Este arquivo � do tipo: <strong>" . $_FILES['arquivo']['type'] . "</strong><br />";
                    echo "Tempor�riamente foi salvo em: <strong>" . $_FILES['arquivo']['tmp_name'] . "</strong><br />";
                    echo "Seu tamanho �: <strong>" . $_FILES['arquivo']['size'] . "</strong> Bytes<br /><br />";

                    $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
                    $nome = $_FILES['arquivo']['name'];


                    // Pega a extensao
                    $extensao = strrchr($nome, '.');

                    // Converte a extensao para mimusculo
                    $extensao = strtolower($extensao);

                    // Somente arquivos, .pdf;
                    // Aqui eu enfilero as extes�es permitidas e separo por ';'
                    // Isso serve apenas para eu poder pesquisar dentro desta String
                    if(strstr('.pdf', $extensao))
                    {
                            // Cria um nome �nico para esta imagem
                            // Evita que duplique as imagens no servidor.
                            $novoNome = md5(microtime()) . $extensao;

                            // Concatena a pasta com o nome
                            $destino = 'arquivos/' . $novoNome; 

                            // tenta mover o arquivo para o destino
                            if( @move_uploaded_file( $arquivo_tmp, $destino  ))
                            {
                                    echo "Arquivo salvo com sucesso em : <strong>" . $destino . "</strong><br />";
                                    echo "<img src=\"" . $destino . "\" />";
                            }
                                 // pode ser colocado mas fun��es ex: UPLOAD_ERR_FORM_SIZE(se exece o tamanho) UPLOAD_ERR_PARTIAL(se oupload n�o foi completo) UPLOAD_ERR_NO_FILE (se nenhum arquivo foi encontrado)                                           
                            else
                                    echo "Erro ao salvar o arquivo. Aparentemente voc� n�o tem permiss�o de escrita.<br />";
                    }
                    else
                            echo "Voc� poder� enviar apenas arquivos \"*.pdf\"<br />";
            }
            else
            {
                    echo "Voc� n�o enviou nenhum arquivo!";
            }
            ?>

    </body>
</html>