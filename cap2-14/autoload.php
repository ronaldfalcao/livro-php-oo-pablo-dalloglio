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
            function __autoload($classe){
                include_once "classes/{$classe}.class.php";
            }
            
            $bolo = new Produto(500, 'Bolo de fubá', 4, 5.60);
            echo 'Código: '.$bolo->codigo.'<br/>';
            echo 'Nome: '.$bolo->descricao.'<br/>';
        ?>
    </body>
</html>
