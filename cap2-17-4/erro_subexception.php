<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Erro com throw-try-catch</title>
    </head>
    <body>
        <?php
            function abrirArquivo($file = NULL){
                if (!$file){
                    throw new ParameterException('Falta o parãmetro de nome do arquivo');
                }
                
                if (!file_exists($file)){
                    throw new FileNotFoundException ('Arquivo não existe');
                    
                }
                
                if(!$retorno = @file_get_contents($file)){
                    throw new FilePermissionException ('Não foi possível ler o arquivo');
                }
                
                return $retorno;
            }
            
            class ParameterException extends Exception{}
            class FileNotFoundException extends Exception{}
            class FilePermissionException extends Exception{}
            
            try {
                $arquivo = abrirArquivo('arquivo.dat');
                echo $arquivo;
            }
            catch (ParameterException $exc){
                echo 'Sem parâmetros';
            }
            catch (FileNotFoundException $exc){
                var_dump($exc->getTrace());
                echo '<br/>';
                echo 'Finalizando aplicação...<br/>';
                die();
            }
            catch (FilePermissionException $exc){
                echo $exc->getFile().' : '.$exc->getLine(). ' # '.$exc->getMessage();
            }
        ?>
    </body>
</html>
