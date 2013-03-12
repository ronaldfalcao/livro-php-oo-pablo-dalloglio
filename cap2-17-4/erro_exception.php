<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Tratamento de exceções</title>
    </head>
    <body>
        <?php
            function abrirArquivo($file = NULL){
                if (!$file){
                    throw new Exception('Falta o parãmetro de nome do arquivo');
                }
                
                if (!file_exists($file)){
                    throw new Exception ('Arquivo não existe');
                    
                }
                
                if(!$retorno = @file_get_contents($file)){
                    throw new Exception ('Não foi possível ler o arquivo');
                }
                
                return $retorno;
            }
            
            try {
                $arquivo = abrirArquivo('arquivo.data');
                echo $arquivo;
            } catch (Exception $exc) {
                echo $exc->getFile() . ' : '.$exc->getLine(). ' # '.$exc->getMessage();
            }
        ?>
    </body>
</html>
