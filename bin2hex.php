<?php

/*Esta função é para converter dados binários em uma representação de string hexadecimal. 
Esta função não serve para converter strings que representam dígitos binários em hexadecimais. 
Se você deseja essa funcionalidade, pode simplesmente fazer o seguinte: */

$binary = "­01000001 01100100 01110010 01101001 01100101 01101100";
//Primeiro converti o texto para binário e depois a funcionalidade abaixo converte para hexadecimal. 
$hex = dechex(bindec($binary));
echo $hex;

/*Isso geraria "Adriel".
Lembre-se de que há uma grande diferença entre dados binários e uma representação de string de binários. */

?>
