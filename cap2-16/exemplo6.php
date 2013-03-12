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
            $xml = simplexml_load_file('paises3.xml');
            
            echo 'Nome: '.  $xml->nome. '<br/>';
            echo 'Idioma: '.  $xml->idioma. '<br/>';
            echo '<br/>';
            echo '*****Estados*****<br/>';
            
            foreach ($xml->estados->nome as $key) {
                echo 'Estado: '.    $key.   '<br/>';
            }
        ?>
    </body>
</html>
