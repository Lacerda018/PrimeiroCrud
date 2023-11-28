<?php

$meses = array(
    "Janeiro", "Fevereiro", "Março",
    "Abril", "Março", "Junho", 
    "Julho", "Agosto","Setembro", 
    "Outubro", "Novembro", "Dezembro"
);

//foreach percorre a variavel que você indicar e cria uma variavel para cada item percorrido
foreach($meses as $index => $mes){
    
    echo "Indice: ".$index."<br>";
    echo "O mês é: ".$mes."<br><br>";
}