<?php

$json = '[{"nome":"Lucas","idade":21},{"nome":"Joao","idade":20}]';

//json_decode() transforma o arquivo JSON em array
$data = json_decode($json, true);

var_dump($data);