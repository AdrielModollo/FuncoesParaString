<?php

$text = 'Isto é um simples texto.';

// this echoes "is is a Simple text." because 'i' is matched first
echo strpbrk($text, ' ');

// this echoes "Simple text." because chars are case sensitive
echo strpbrk($text, 'x');
?>