<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Erro com flags</title>
    </head>
    <body>
        <?php
            function abrirArquivo($file = NULL){
                
                if (!$file){
                    return FALSE;
                }
                
                if (!file_exists($file)){
                    return FALSE;
                }
                
                if(!$retorno = @file_get_contents($file)){
                    echo '3';
                    return FALSE;
                }  
            }
            
            $arquivo = abrirArquivo('arquivo');
            
            echo $arquivo;
            
            if (!$arquivo){
                echo 'Falha ao abrir o arquivo.';
            }
            else{
                echo 'Arquivo aberto com sucesso.';
            }
        ?>
    </body>
</html>
