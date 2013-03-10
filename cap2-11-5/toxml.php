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
            include_once './ToXML.class.php';
            
            $toto = new Cachorro('Totó', 8, 'Dalmata');
            $vava = new Cachorro('Snoop', 5, 'Beagle');
            echo '<h2>Para ver o XML inspecione o elemento.</h2>';
            echo $toto->toXml();
            echo '<br>';
            echo $vava->toXml();
            
        ?>
    </body>
</html>
