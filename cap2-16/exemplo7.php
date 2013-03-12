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
            $xml = simplexml_load_file('paises4.xml');
            
            echo '*****Estados*****<br/>';
            
            foreach ($xml->estados->estado as $value) {
                echo str_pad('Estado: '.$value['nome'], 30)." \t----------- ".'Capital: '.$value['capital'].'<br/>';
            }
        ?>
    </body>
</html>
