<?php
if (!($fp = fopen('arquivo.txt', 'w'))) {
    return;
}
$money1 = 68.75;
$money2 = 54.36;
$money3 = 70;
$money = $money1 + $money2 + $money3;
// echo $money irá mostrar "123.1";
$len = fprintf($fp, '%01.2f', $money);

echo "escreveu $len bytes em arquivo.txt";

?>