<?php
$str = "Primeiro=valor&arr[]=comida+bar&arr[]=bar";
parse_str($str);
echo $Primeiro;  // value
echo $arr[0]; // foo bar
echo $arr[1]; // baz

parse_str($str, $output);
echo $output['Primeiro'];  // value
echo $output['arr'][0]; // foo bar
echo $output['arr'][1]; // baz

?>