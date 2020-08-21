<?php
$haystack = 'ababcd';
$needle   = 'aB';

$pos      = strripos($haystack, $needle);

if ($pos === false) {
    echo "Sinto muito, nós não encontramos ($needle) em ($haystack)";
} else {
    echo "Parabéns!\n";
    echo "Nós encontramos a última ($needle) em ($haystack) na posição ($pos)";
}
?>