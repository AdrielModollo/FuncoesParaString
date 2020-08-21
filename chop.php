<?php
echo "<pre>";//sem <pre> você não pode ver a saída desejada em seu navegador
echo chop("   Adriel  ");//espaços corretos são eliminados
echo chop("AdRiel", "a..z"); //Verifica quais letras são maiúscula e exibe todas até última letra informada
echo "</pre>";
?>