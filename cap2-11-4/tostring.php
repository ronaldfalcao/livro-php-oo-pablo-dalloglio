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
            include_once './tostring.class.php';
            
            $toto = new Cachorro('Totó');
            $vava = new Cachorro('Vavá');
            echo $toto;
            echo "<br/>\n";
            echo $vava;
            echo "<br/>\n";
        ?>
    </body>
</html>
