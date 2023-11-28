<?php

$pessoas = array();

//adciona um item a partir do array já criado
array_push($pessoas, array(
    'nome'=>'Lucas',
    'idade'=>21
));

array_push($pessoas, array(
    'nome'=>'Joao',
    'idade'=>20
));

print_r($pessoas[0]);