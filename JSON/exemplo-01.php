<?php

$pessoas = [];

//adciona um item a partir do array já criado
array_push($pessoas, array(
    'nome'=>'Lucas',
    'idade'=>21
));

array_push($pessoas, array(
    'nome'=>'Joao',
    'idade'=>20
));

//json_encode() transforma o array em arquivo JSON
echo json_encode($pessoas);
