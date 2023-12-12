<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD em PHP</title>
</head>
<body>

    <form method="post" action="delete.php">
        <label for="nome">Nome do Registro a Ser Excluído:</label>
        <input type="text" name="nome" required>

        <label for="senha">Digite a senha para excluir</label>
        <input type="password" name="senha" required>
        <input type="submit" value="Excluir">
    </form>

</body>

<?php

$nome = $_POST['nome'];
$senha = $_POST['senha'];

function deletarArquivo(){
    global $nome, $senha;
    $deletarArquivo = fopen('arquivo'."$nome.txt",'w');

    if($deletarArquivo[$senha] === $senha){
        unlink($deletarArquivo);
    } else {
        echo "Erro ao Excluir!";
    }

    return "Registro Excluído!";
}

if ("arquivo$nome" !== null){
    deletarArquivo();
}

?>