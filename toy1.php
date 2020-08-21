<?php

function converterNomeParaEmail($nome) {
    //Explode divide uma string em strings, note que ' ' possuí um espaço para separação das palavras dentro da váriavel $nome
    $partesDoNome = explode(' ', $nome);
    /*Count: Conta o número de elementos de uma variável, ou propriedades de um objeto, neste caso o -1 é atribuido a váriavel
    $partesDoNome onde puxa o último valor atribuido a array, exemplo: "Lapis laser do futuro" a palavra possuí um tamanho
    total de 04 posições, porém como o array por padrão inicia em 0, "futuro" está na posição [3] */
    $ultimoNome = $partesDoNome[count($partesDoNome) -1];
    //Atribuido está variável para sempre puxar somente a primeira do nome, armazena na posição [0] do array
    $primeiraLetraNome = $nome[0];

    //strtolower converte toda letra maiúscula para minúscula
    return strtolower($primeiraLetraNome . '_' . $ultimoNome . '@empresax.com.br');
}

function formatacaoDoNome($nome){
    //Definido váriavel para verificar quais conteúdo será tratado como excessão para manter letras minúscula
    $preposicoes = ['da', 'de', 'do', 'das', 'dos'];
    $parteNova =[];
    $partesDoNome = (explode(' ', $nome));

    foreach ($partesDoNome as $partes){
        //in_array checa se o valor existe em uma array
        if (in_array($partes, $preposicoes)) {
            // array_push adiciona um ou mais elemento no final de um array
            array_push($parteNova, strtolower($parte));
        } else {
            //strtoupper letras será exibidas em maiúscula
            $primeiraLetraConvertidaParaMaiuscula = strtoupper($partes[0]);
            //substr retorna parte de uma string, no casa ($parte, 1)
            $restoFraseConvertidoParaMinusculo = strtolower(substr($partes, 1));
            
            array_push($parteNova, $primeiraLetraConvertidaParaMaiuscula . $restoFraseConvertidoParaMinusculo);
        }
    }

    /*implode — Junta elementos de uma matriz em uma string, neste caso ' ' observe que tem um espaço, porém eu poderia ter
    atribuido qualquer valor como '-'  '_' '+' '-' */                 
    return implode(' ', $parteNova);
}

//Arrays
$nomes = [
    "ANA RITA DE CASSIA SILVA OLIVEIRA", 
    "CARLINDO SANTOS ARAUJO",
    "VANGELI SANDRA FEITOZA RAMOS",
    "JOSE EDIMILSON PEREIRA",
    "GILMARA ARAUJO SANTANA",
    "IBERTO GALDINO NUNES",
    "HELENICE FELICIANO MANFRE"
];

/*Atribui html dentro do php, como o código não era muito extenso e somente para formatação de tabela achei mais viavél, 
caso contrario eu teria que ficar abrindo e fechando diversas vezes a tag php por causa das condições das variáveis, 
inclusive dentro do foreach */
$html = '';

$html .= '<table border = "1">';
$html .= '<tr>';
$html .= '<th>Nome</th>';
$html .= '<th>E-mail</th>';
'</tr>';

//foreach percorre todos elementos de um array
foreach ($nomes as $nome) {
    $nome = formatacaoDoNome($nome);
    $email = converterNomeParaEmail($nome);
    $html .= "<tr><td>$nome</td><td>$email</td></tr>";
}


$html .= '</table>';

//exibe código html
echo $html;

?>
