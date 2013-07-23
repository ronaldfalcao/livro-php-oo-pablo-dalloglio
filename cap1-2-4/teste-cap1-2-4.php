<?php
echo '<h1>Testes do capítulo 1 - 2 - 4 (Saídas)</h1>';

echo '<h2>Comando print()</h2>';

$a = 1;

#Reconhece o valor das variáveis e imprime o valor.
print ("teste{$a}<br/>");

#Não reconehce o valor das variáveis e imprime como string.
print ('teste{$a}<br/>');

$lista = array('Azul', 'Amarelo', 'Verde', 'Cinza', 'Vermelho', 'Marrom', 'Violeta', 'Laranja');
echo '<h2>Comando var_dump()</h2>';
var_dump($lista);

echo '<h2>Comando print_r()</h2>';
print_r($lista);

?>
