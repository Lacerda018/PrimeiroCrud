<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD em PHP</title>
</head>
<body>

<!-- Formulário -->
<form method="post" action="update.php">
    <label for="nome">Novo Nome:</label>
    <input type="text" name="nome" required>

    <label for="email">Novo E-mail:</label>
    <input type="email" name="email" required>

    <label for="senha">Nova Senha:</label>
    <input type="password" name="senha" required>

    <input type="submit" value="Atualizar">
</form>

</body>

<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

function atualizarArquivo(){
    global $nome, $email, $senha;
    $updateArquivo = fopen('arquivo'."$nome.txt",'w');
    fwrite($updateArquivo, "Nome: $nome "."E-mail: $email "."Senha: $senha");
    fclose($updateArquivo);

    return $updateArquivo;
}

if ("arquivo$nome" !== null){
    atualizarArquivo();
} else {
    echo 'Arquivo não existe';
}


?>
