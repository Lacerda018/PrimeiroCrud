<?php
/*
    $anoNascimento = 2002;

    $nomeCompleto = "Lucas Andrey Novaes Lacerda";*/

    //Na linha debaixo temos uma variavel do tipo string com um nome
    $nome1 = "joao";

    $sobrenome = "Rangel";
    //para concatenar 2 variaveis utilizamos o “.”
    $nomeCompleto = $nome1 . " " . $sobrenome;

    echo $nomeCompleto;
    //o php ira parar de interpretar assim que cair nesta função;
    exit;

    echo $nome1;

    echo "<br/>";

    //unset($nome1);

    if(isset($nome1)){
        echo $nome1;
    }

    

?>