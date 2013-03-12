<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $xml = simplexml_load_file('paises2.xml');
            
            echo 'Nome: '   .   $xml->nome  .   '<br/>';
            echo 'Idioma'   .   $xml->idioma.   '<br/>';
            
            echo '<br/>';
            
            echo '***Informações Geográficas***<br/>';
            
            echo    'Clima: '   .   $xml->geografia->clima  .   '<br/>';
            echo    'Costa: '   .   $xml->geografia->costa  .   '<br/>';
            echo    'Pico: '    .   $xml->geografia->pico   .   '<br/>';
            
        ?>
    </body>
</html>
