<form>

    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">

</form>

<?php

if (isset($_GET)){

    foreach($_GET as $key => $value ){

        echo "Nome do campo " . $key."<br>";

        echo "Valor do campo: " . $value."<br>";

        echo "<hr>";
    }
}

    $valorProduto = 14500.00;
    $desconto = 5; // 5% de desconto em programação é * 0.05, para isso divida esse valor por 100.

    if($valorProduto > 10000){
        echo $valorProduto = $valorProduto / ($desconto * 100);
    }

    if($valorProduto > 10000){
        echo $valorProduto = $valorProduto - ($valorProduto * ($desconto / 100));
    }
?>

