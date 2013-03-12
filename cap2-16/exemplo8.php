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
            
            foreach ($xml->estados->estado as $estado) {
                
                foreach ($estado->attributes() as $key => $value) {
                    echo "$key=>$value<br/>";
                }
                
                echo '----------------<br/>';
                
            }
        ?>
    </body>
</html>
