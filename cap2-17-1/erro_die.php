<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Erro usando die()</title>
    </head>
    <body>
        <?php
            function abrirArquivo($file = NULL){
                
                if (!$file){
                    die('Falta o parâmetro com o nome do arquivo.');
                }
                
                if (!file_exists($file)){
                    die('O arquivo não existe.');
                }
                
                if(!$retorno = @file_get_contents($file)){
                    die('Impossível ler o arquivo.');
                }
                
            }//Fim da função abrirArquivo()
            
            //usando a função para abrir um arquivo. Escolher uma das alternativas
            //pois a função die() aborta a execução.
            echo 'Usando a função sem parâmetros: '.'<br/>';
            $arquivo = abrirArquivo();
            
            echo '<br/>Usando uma função e passando o nome de um arquivo inexistente:<br/>';
            $arquivo01 = abrirArquivo('teste');
            
            echo '<br/>Usando a função para abrir o arquivo:';
            $arquivo02 = abrirArquivo('arquivo');
        ?>
    </body>
</html>
