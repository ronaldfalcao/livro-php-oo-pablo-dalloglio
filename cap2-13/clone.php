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
            include_once './Clone.class.php';
            
            $toto = new Cachorro(100, 'Totó', 10, 'Fox Terier');
            
            $vava = clone $toto;
            
            echo 'Código: '.$toto->coleira."<br/>";
            echo 'Nome: '.$toto->nome."<br/>";
            echo 'Idade: '.$toto->idade."<br/>";
            echo '<br/>';
            echo 'Código: '.$vava->coleira."<br/>";
            echo 'Nome: '.$vava->nome."<br/>";
            echo 'Idade: '.$vava->idade."<br/>";
            
        ?>
    </body>
</html>
