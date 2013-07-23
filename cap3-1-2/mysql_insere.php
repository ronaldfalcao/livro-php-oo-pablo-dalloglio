<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Inserindo valores no MySQL</title>
    </head>
    <body>
        <?php
            
            //Criando a conexão...
            $connect_mysql_db = mysql_connect('localhost', 'root', 'root');
            
            //Selecionando o banco de dados...
            mysql_select_db('livrophp', $connect_mysql_db);
            
            mysql_query("INSERT INTO famosos (codigo, nome) VALUES (1, 'Érico Veríssimo')", $connect_mysql_db);
            mysql_query("INSERT INTO famosos (codigo, nome) VALUES (2, 'Machado de Assis')", $connect_mysql_db);
            mysql_query("INSERT INTO famosos (codigo, nome) VALUES (3, 'Graça Aranha')", $connect_mysql_db);
            mysql_query("INSERT INTO famosos (codigo, nome) VALUES (4, 'Alvares de Azevedo')", $connect_mysql_db);
            mysql_query("INSERT INTO famosos (codigo, nome) VALUES (5, 'Clarice Lispector')", $connect_mysql_db);
            mysql_query("INSERT INTO famosos (codigo, nome) VALUES (6, 'Lígia F. Telles')", $connect_mysql_db);
            mysql_query("INSERT INTO famosos (codigo, nome) VALUES (7, 'Mário Quintana')", $connect_mysql_db);
            mysql_query("INSERT INTO famosos (codigo, nome) VALUES (8, 'Cora Coralina')", $connect_mysql_db);
            
            //Fechando a conexão...
            mysql_close($connect_mysql_db);
        ?>
    </body>
</html>
