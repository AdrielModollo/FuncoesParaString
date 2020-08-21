<?php
$foo = 'OlaMundo';
$foo = lcfirst($foo);             // olaMundo

$bar = 'OLA MUNDO!';
$bar = lcfirst($bar);             // oLLA MUNDO!
$bar = lcfirst(strtoupper($bar)); // oLLA MUNDO!

echo "$bar";
echo "$foo";
?>