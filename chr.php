<?php
$str = "A string termina em escape: ";
$str .= chr(28); /* 
/ * adiciona um caractere de escape no final de $ str * / */

/* Muitas vezes isso é mais útil */

$str = sprintf("The string ends in escape: %c", 28);
?>