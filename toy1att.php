<?php

$nome = "aNA rITA dE cASSIA sILVA oLIVEIRA";
$nome1= 'cARLINDO dOS sANTOS aRAUJO';
$nome2= "vANGELI sANDRA fEITOZA rAMOS";
$nome3= "jOSE eDIMILSON pEREIRA";
$nome4= "gILMARA aRAUJO sANTANA";
$nome5= "iBERTO gALDINO nUNES";
$nome6= "hELENICE fELICIANO mANFRE";

$emailSufixo = '@empresax.com.br';

function converteNome($nome) {
    $nome = ucwords(strtolower($nome));
    return ($nome);

  
}

function converteNomeParaEmail($nome, $emailSufixo) {
  $primeiraLetra = $nome[0];
  // $nome[0] pega o primeiro caracter da variável $nome
  $ultimaParte = substr($nome, strrpos($nome, ' ') + 1);
  
  // substr é uma função com 2 parametros
  // o primeiro parametro é a string
  // e o segundo é a partir de qual indice eu quero a string
  // Ex: Ana -> substr('Ana', 0) -> 'Ana'
  // Ana -> substr('Ana', 1) -> 'na'
  // Ana -> substr('Ana', 2) -> 'a'
  // o retorno do substr é uma parte da string a partir de um indice especifico

  // strrpos é uma função com 2 parametros
  // o primeiro parametro é a string
  // e o segundo é a ultima ocorrencia de uma fração da string dentro da própria string
  // Ex: Camelo -> strrpos('Camelo', 'C') -> retorno 0 (indice 0)
  // Camelo -> strrpos('Camelo', 'Ca') -> retorno 0 (indice 0)
  // Camelo -> strrpos('Camelo', 'lo') -> retorno 4 (indice 0)
  // Camelo -> strrpos('Camelo', 'mel') -> retorno 2 (indice 2)


  return strtolower($primeiraLetra . '_' . $ultimaParte . $emailSufixo);
}

//var_dump(converteNomeParaEmail($nome, $emailSufixo));

?>

<table border = 1>
    <tr>
        <th> Nome </th>
        <th> Email </th>
    </tr>
    <tr>
    <td><?php print converteNome($nome);  ?></td>
    <td><?php print converteNomeParaEmail($nome, $emailSufixo); ?></td>
    </tr>
    <tr>
    <td><?php  echo converteNome($nome1);  ?></td>
    <td><?php echo converteNomeParaEmail($nome1, $emailSufixo); ?></td>
    </tr>
    <tr>
    <td><?php echo converteNome($nome2);  ?></td>
    <td><?php echo converteNomeParaEmail($nome2, $emailSufixo); ?></td>
    </tr>
    <tr>
    <td><?php echo converteNome($nome3);  ?></td>
    <td><?php echo converteNomeParaEmail($nome3, $emailSufixo); ?></td>
    </tr>
    <tr>
    <td><?php echo converteNome($nome4);  ?></td>
    <td><?php echo converteNomeParaEmail($nome4, $emailSufixo); ?></td>
    </tr>
    <tr>
    <td><?php echo converteNome($nome5);   ?></td>
    <td><?php echo converteNomeParaEmail($nome5, $emailSufixo); ?></td>
    </tr>
    <tr>
    <td><?php echo converteNome($nome6);  ?></td>
    <td><?php echo converteNomeParaEmail($nome6, $emailSufixo); ?></td>
    </tr>
    </tr>

</table>
