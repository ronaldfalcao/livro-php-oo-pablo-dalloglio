<?php
echo '<h1>Teste capítulo 1 - 3</h1>';
echo '<h2>Variáveis Variáveis (Variable variables)</h2>';

$variavel = 'email';
$$variavel = 'ronald@ronaldfalcao.com.br';

echo 'Valor de $variavel: '.$variavel.'<br/>';
echo 'Valor de $$variavel ou $email(Variável Variável): '.$email.'<br/>';

echo '<h2>Variável por valor</h2>';
$a = 10;
$b = $a; //$b aponta para a.

echo 'Mostrando $a: '.$a.'<br/>';
echo 'Mostrando $b: '.$b.'<br/>';
$a = 20;
echo 'Alterando $a...'.'<br/>';
echo 'Mostrando $a: '.$a.'<br/>';
echo 'Mostrando $b: '.$b.'<br/>';
$b = 30;
echo 'Alterando $b...'.'<br/>';
echo 'Mostrando $a: '.$a.'<br/>';
echo 'Mostrando $b: '.$b.'<br/>';

echo '<h2>Variável por referência</h2>';
$a = 10;
$b = &$a; //$b aponta para a.

echo 'Mostrando $a: '.$a.'<br/>';
echo 'Mostrando $b: '.$b.'<br/>';
$a = 20;
echo 'Alterando $a...'.'<br/>';
echo 'Mostrando $a: '.$a.'<br/>';
echo 'Mostrando $b: '.$b.'<br/>';
$b = 30;
echo 'Alterando $b...'.'<br/>';
echo 'Mostrando $a: '.$a.'<br/>';
echo 'Mostrando $b: '.$b.'<br/>';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
