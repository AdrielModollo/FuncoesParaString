<?php
$trans = get_html_translation_table(HTML_ENTITIES);
$str = "Teste & <text> & Sexta";
$encoded = strtr($str, $trans);

echo $encoded;
?>