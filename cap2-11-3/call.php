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
            include_once './Produto.class.php';
            
            $produto = new Produto(1, 'Pendrive Kingston 16GB', 1, 29.90);
            echo $produto->Vender(10);
        ?>
    </body>
</html>
