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
            include_once './Cachorro.class.php';
            
            $toto = new Cachorro('Totó');
            
            $toto->Nascimento = '3 de março';
            $toto->Nascimento = '10/04/2013';
        ?>
    </body>
</html>
