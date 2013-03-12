<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Erro Trigger</title>
    </head>
    <body>
        <?php
            function abrirArquivo($file = NULL){
                
                if (!$file){
                    trigger_error('Falta o parâmetro com o nome do arquivo.', E_USER_NOTICE);
                    return false;
                }
                
                if (!file_exists($file)){
                    trigger_error('Arquivo não existe', E_USER_ERROR);
                    return false;
                }
                
                if(!$retorno = @file_get_contents($file)){
                    trigger_error('O arquivo não pôde ser lido.', E_USER_WARNING);
                    return false;
                }  
            }//Fim da função abrirArquivo().
            
            function manipulaErro($numero, $mensagem, $arquivo, $linha){
                
                $mensagem = "Arquivo $arquivo: linha $linha #nro $numero: $mensagem <br/>";
                
                //gravando o erro em log
                $log = fopen('erro.log', 'a');
                fwrite($log, $mensagem);
                fclose($log);
                
                if($numero == E_USER_WARNING){
                    echo $mensagem.'<br/>';
                }
                elseif ($numero == E_USER_ERROR) {
                    echo $mensagem.'<br/>';
                    die();
            }
                
            }
            
            set_error_handler('manipulaErro');
            
            $arquivo = abrirArquivo("a1rquivo.dat");
            echo $arquivo;
        ?>
    </body>
</html>
