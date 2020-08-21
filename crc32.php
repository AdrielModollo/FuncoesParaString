<?php
$checksum = crc32("Adriel"); 
printf("%u\n", $checksum);

/*
Gera o polinômio cyclic redundancy checksum de 32-bit de comprimento do str.É usado geralmente para validar a integridade de um dado sendo transferido.

Devido ao tipo integer do PHP conter sinal e muitos dos checksums crc32 resultarem em integers negativos, você precisa usar o formatador "%u" de sprintf() ou printf() para obter uma string representando o checksum crc32 sem sinal.

Parâmetros ¶
str
A informação.

Valor Retornado ¶
Retorna o checksum crc32 da str como um inteiro.
*/
?>