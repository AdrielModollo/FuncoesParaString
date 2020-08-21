<?php
echo addcslashes('comida[ ]', 'A..z');
// output: \ f \ o \ o \ [\]
// Todas as letras maiúsculas e minúsculas terão escape
// ... mas também o [\] ^ _ `e quaisquer guias, linha
// feeds, retornos de carro, etc.
?>