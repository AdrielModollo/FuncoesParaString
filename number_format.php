<?php

$number = 1234.56;

// Notação Inglesa (padrão)
$english_format_number = number_format($number);
// 1,234

// Notação Francesa
$nombre_format_francais = number_format($number, 2, ',', ' ');
// 1 234,56

$number = 1234.5678;

// Notação Inglesa com separador de milhar
$english_format_number = number_format($number, 2, '.', '');
// 1234.57

?>