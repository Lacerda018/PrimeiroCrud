<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD em PHP</title>
</head>
<body>

<form method="post" action="create.php">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required>

    <label for="email">E-mail:</label>
    <input type="email" name="email" required>

    <label for="senha">Senha:</label>
    <input type="password" name="password" required>

    <input type="submit" value="Inserir">
</form>

</body>
</html>

<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$arquivo = file_put_contents('C:\Users\lucas\Downloads\FORA Download\FACUL\PHP\testeCrudArquivo\arquivo.txt', VALUES ('$nome', '$email' ,'$senha'));

$conteudo = file_get_contents($arquivo);

echo $conteudo;


?>
