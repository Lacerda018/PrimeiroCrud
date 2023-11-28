<?php

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

//strpos() procura a palavra ou letra com base na variável
$q = strpos($frase, "mãe");

//exibe a string antes do ponto até determinado ponto
$texto = substr($frase, 0, $q);

var_dump($texto);

//strlen exibe o tamanho da string
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);
?>