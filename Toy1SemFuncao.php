<?php

$nome1= ucwords(strtolower('ANA RITA DE CASSIA SILVA OLIVEIRA'));
$nome2= ucwords(strtolower('CARLINDO DOS SANTOS ARAUJO'));
$nome3=  "VANGELI SANDRA FEITOZA RAMOS";
$nome4=  "JOSE EDIMILSON PEREIRA";
$nome5=  "GILMARA ARAUJO SANTANA";
$nome6=  "IBERTO GALDINO NUNES";
$nome7=  "HELENICE FELICIANO MANFRE";

$email2= "c_araujo";
$email3= "v_ramos";
$email4= "j_pereira";
$email5= "g_santana";
$email6= "i_nunes";
$email7= "h_manfre";


$primeiraLetra = $nome1[0];
$ultimoNome = substr($nome1, strrpos($nome1, ' ') + 1);
$provedor = '@empresax.com.br';

$juncaoEmail1 = strtolower($primeiraLetra . '_' .  $ultimoNome . $provedor);


/* Exemplo de como chamar variáveis
$a = 'hello';
$$a = "world";
echo "$a ${$a}";
echo "$a $hello";
*/


?> 

<table border = 1>
    <tr>
        <th> Nome </th>
        <th> Email </th>
    </tr>
    <tr>
    <td><?php echo "$nome1"; ?></td>
    <td><?php echo "$juncaoEmail1";?></td>
    </tr>
    <tr>
    <td><?php echo "$nome2"; ?></td>
    <td><?php echo "$email2$provedor";?></td>
    </tr>
    <tr>
    <td><?php echo "$nome3"; ?></td>
    <td><?php echo "$email3$provedor";?></td>
    </tr>
    <tr>
    <td><?php echo "$nome4"; ?></td>
    <td><?php echo "$email5$provedor";?></td>
    </tr>
    <tr>
    <td><?php echo "$nome5"; ?></td>
    <td><?php echo "$email6$provedor";?></td>
    </tr>
    <tr>
    <td><?php echo "$nome6"; ?></td>
    <td><?php echo "$email6$provedor";?></td>
    </tr>
    <tr>
    <td><?php echo "$nome7"; ?></td>
    <td><?php echo "$email7$provedor";?></td>
    </tr>


</table>

