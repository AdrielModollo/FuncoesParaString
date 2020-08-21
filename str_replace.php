<?php
$challenge = '-aaa----b-c-----d--e---f';
echo str_replace('--', '-', $challenge).'<br>';
echo preg_replace('/--+/', '-', $challenge).'<br>';
?>