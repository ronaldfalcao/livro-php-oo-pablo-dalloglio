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
            $xml = simplexml_load_file('paises.xml');
            
            foreach ($xml->children() as $key => $value) {
                echo "$key -> $value <br/>";
            }
        ?>
    </body>
</html>
