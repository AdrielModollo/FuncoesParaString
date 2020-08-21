<?php

function converteNome($nome) {
    $nome = ucwords(strtolower($nome));
    return ($nome);

}

function converteNomeParaEmail($nome) {
  $primeiraLetra = $nome[0];
  // $nome[0] pega o primeiro caracter da variável $nome
  $ultimoNome = substr($nome, strrpos($nome, ' ') + 1);
  $emailSufixo = '@empresax.com.br';

  return strtolower($primeiraLetra . '_' . $ultimoNome . $emailSufixo);
}
//var_dump(converteNomeParaEmail($nome, $emailSufixo));
$nomes = [
    "ANA RITA DE CASSIA SILVA OLIVEIRA", 
    "CARLINDO SANTOS ARAUJO",
    "VANGELI SANDRA FEITOZA RAMOS",
    "JOSE EDIMILSON PEREIRA",
    "GILMARA ARAUJO SANTANA",
    "IBERTO GALDINO NUNES",
    "HELENICE FELICIANO MANFRE"
];

?>

    <table border = "1">
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
        </tr>

<?php

foreach ($nomes as $nome) {
    $nome = converteNome($nome);
    $email = converteNomeParaEmail($nome); 
?> 

        <tr>
            <td><?= $nome ?></td>
            <td><?= $email ?></td>
        </tr>

<?php } ?>

</table>