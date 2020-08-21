Este repositório contém toda utilização de funções String em PHP para teste.

OBS: Os arquivos que ínicia com o nome Toy1 é utilizado para exercitar as funções String.

FUNICIONAMENTO DA ESTRUTURA DO SERVIDOR/PHP
No PHP o código é executado dentro do servidor, gerando então o HTML onde é enviado para o navegador.  
O Navegador recebe esses dados, porém não sabe qual é o código fonte.

 Servidor -----> Navegador

Quando possuímos um servidor a forma de funcionamento é conforme o fluxo abaixo, onde o cliente preenche os dados, e 
através da URL é feita a comunicação com o servidor. No último processo o servidor retorna essas informações se solicitado.

Cliente -----> URL (Navegador) -----> SERVIDOR 
 ^========================================^
 
Exemplo:

=======================REQUISIÇÃO:============================
<?php include("cabecalho.php");?>
    <!--Faz um requisão para a página adiciona_produto -->
                <h1>Formulario de produto</h1>
    <form action="adiciona_produto.php">
        Nome:
        <input type="text" name="nome"><br/>
        Preço:
        <input type="number" name="preco"><br/>

        <input type="submit" value="Cadastrar">
    </form>
<?php include("rodape.php");?>

=======================RESPOSTA==============================
<?php include("cabecalho.php");?>
    <?php
        //Cria uma função que é chamada uma única vez
        function insereProduto($conexao, $nome, $preco) {
            //É informado parametros que o servidor vai receber
            $query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
            //Retorna o resultado do mysql query
            return mysqli_query($conexao, $query);
        }

        /*Está é a resposta que foi solicitada através do produto_formulario */
        $nome = $_GET["nome"];
        $preco = $_GET["preco"];
        //Conecta com o banco de dados MySql
        $conexao = mysqli_connect ('localhost', 'root', '', 'loja');
      
       //Foi colocado uma condição para verificar se o produto foi adicionado ou não.
       if (insereProduto($conexao, $nome, $preco)){ ?>
            <p class="alert-success"> Produto <?php echo $nome; ?> , <?php echo $preco; ?> adicionado com sucesso </p>
        <?php  } else { ?>
            <p class="alert-danger"> Produto <?=  $nome ?>  não foi adicionado. </p>
        <?php
        
        }

       // mysqli_close($conexao);
 ?>      
 <?php include("rodape.php");?>

Desta forma é enviado os dados do formulário que o cliente digitou na requisição para o servidor(Armazena e faz a leitura de dados).

