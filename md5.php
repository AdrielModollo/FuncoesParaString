<?php
$str = 'apple';

if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') {
    echo "Váriável $str";
    exit;
} else {
    echo 'ops, algo deu errado';
}
?>