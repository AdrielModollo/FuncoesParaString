<?php

/* codifica uma string usando o algoritmo uuencode.
Uuencode traduz toda string (incluindo binários) em caracteres imprimíveis, fazendo eles seguro para transmissão em rede.
Dados uuencoded fica 35% maior que o original.
*/
$some_string = "texto";

echo convert_uuencode($some_string);
?>