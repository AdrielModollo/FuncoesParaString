<?php
$nome = 'Linguagem PHP';
$nome_2 = ' Linguagem Java ';

echo "strlen: será impressa a quantidade de caracteres da string (13)<br>";
echo strlen($nome);
echo "<br><br>";

echo "srttolower: toda a string é convertida para minúscula<br>";
echo strtolower($nome);
echo "<br><br>";

echo "ucwords: Converte o primeiro caractere de cada palavra para maiúsculo<br>";
echo ucwords($nome);
echo "<br><br>";

echo "ucfirst: Converte o primeiro caractere para maiúsculo<br>";
echo ucfirst($nome);
echo "<br><br>";

echo "strtoupper: Converte a string para maiúscula<br>";
echo strtoupper($nome);
echo "<br><br>";

echo "str_replace: Substitui a string Linguagem pela string Amo<br>";
echo str_replace('Linguagem', 'Amo', $nome);
echo "<br><br>";

echo "substr_replace: Insere na primeira posição da string os caracteres PHP<br>";
echo substr_replace($nome, 'PHP', 0, 0);
echo "<br><br>";

echo "substr: Será retornada parte da string<br>";
echo substr($nome, 1, 5);
echo "<br><br>";

echo "trim: Retira o espaço no início e no final de uma string<br>";
echo trim($nome_2);
echo "<br><br>";

?>